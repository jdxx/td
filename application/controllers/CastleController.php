<?php

class CastleController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$this->view->layoutTitle = 'Burgen bearbeiten';
    	$this->view->layoutHelp  = '/castle/help_index';    	
    	$this->view->layoutAdd   = '/castle/create';
    	
        $this->view->castles = CastleQuery::create()->orderByName()->find();
    }

    public function listAction()
    {
    	$this->view->layoutTitle    = '&Uuml;bersicht Burgen';
    	$this->view->layoutHelp     = '/castle/help_list';
    	
    	$castle = new CastleQuery();
    	$this->view->castles = $castle->orderById()->find();
    
    }
    
    public function createAction()
    {
        $this->view->layoutTitle = 'Burg bearbeiten';
    	
    	$this->view->castleLocations = CastleLocationQuery::create()->orderByName()->find();
    	$this->view->castleTypes	 = CastleTypeQuery::create()->orderByName()->find();
    	
	    $castle = new Castle();

    	if ($this->_request->isPost()) 
    	{
    		if(isset($_POST["cancel"])) 
    		
    		{ 
    			$this->_helper->redirector("index", "castle", "default");
    		}
    		elseif(isset($_POST["save"]))
    		{
    			$postData = $this->_request->getPost();
	    		$castle->fromArray($postData);
	    		$castle->save();
	    		$this->_helper->redirector("index", "castle", "default");
    		}
    	}
    	
    	$this->view->castle = $castle;
    	
    	$this->_helper->viewRenderer('update');
    }

    public function updateAction()
    {
    	$this->view->layoutTitle    = 'Burg bearbeiten';
    	$this->view->layoutHelp     = '/castle/help_update';
    	
    	$id = $this->_request->getParam('id');
        $castle = CastleQuery::create()->findPk($id);

    	if ($this->_request->isPost()) {
    		if(isset($_POST["cancel"]))
    		{
    			{
    				$this->_helper->redirector("index", "castle", "default");
    			}
    	
    		}
    		elseif(isset($_POST["save"]))
    		{
//    			$castle = new Castle();
//     			echo "<xmp>"; var_dump($this->_request->getPost());
    			$castle->fromArray($this->_request->getPost());
    			$castle->save();
    			$this->_helper->redirector("index", "castle", "default");
    		}
    	}
    	
    	$this->view->castle = $castle;
    }

    public function deleteAction()
    {
    	//                 echo '<!DOCTYPE html><html lang="de"><head><meta charset="utf-8"/></head><body>';
    	//                 		echo "<xmp>";
    }

    public function importAction()
    {
		$this->view->layoutTitle    = 'Burgen importieren';
    	$this->view->layoutHelp     = '/castle/help_import';
    	$this->view->layoutNoNavbar = true;
    	

    	$imported_castles = 2;
    		
    	if ($this->_request->isPost()) {
                $post['burgenliste'] = $_POST['burgenliste'];
                
                /*
                   find date of last data-set from lk.tavernbrawl.ch and read content
                */
                $dateYYYY = date('Y');
                $dateMM   = date('m');
                $dateDD   = date('d');
                
                for($i = 0; $i < 6; $i++)
                {	
                	$dateYYYYMMDD = date('Y-m-d', mktime(0, 0, 0, $dateMM, $dateDD - $i, $dateYYYY));             	
		    		$url = 'http://lk.tavernbrawl.ch/LK-DE-7/player/LK-' . $dateYYYYMMDD . '/65383/';
	                $tavernbrawl = self::curl($url);
		    		
		    		if(strpos($tavernbrawl, '<title>Error') == 0)
		    		{
		    			break;
		    		}
                }

                /*
                 Get coordinates from lk.tavernbrawl.ch
                */
                $dom = new DOMDocument();
                @$dom->loadHTML($tavernbrawl);

                $xpath = new DOMXPath($dom);
                $tds = $dom->getElementsByTagName('td');
                
                $tavern_array = array();

                foreach($tds as $td) 
                {
                	$text = preg_replace ('#\s+#' , ' ' , $td->nodeValue);
                	if(strpos($text, "coordinates") > 0)
                	{
                		$key = $text;
                	}
                	else
                	{
                		$tavern_array[$key] = utf8_decode($text);
                	}
                }
                unset($dom);

                /*
				   Processing Sourcecode from l&k desktop client
				*/
                $dom = new DOMDocument();
                @$dom->loadHTML($post['burgenliste']);

                $xpath = new DOMXPath($dom);
				$divs = $dom->getElementsByTagName('div');

				$source_array = array();
				
				foreach($divs as $div) 
				{
				    $attr = $div->getAttribute('class');
				    if($attr == 'castleListItem') 
				    {
	 				   	$text = preg_replace ('#\s+#' , ' ' , $div->nodeValue);
				    	$source_array[] = explode(" ", $text);
				    }
				}

			foreach($source_array as $_source_array) 
			{
				$coord = array_search($_source_array[1], $tavern_array);
				
				if(!$coord == false)
				{
					$castle = CastleQuery::create()->findOneByCoordinates($coord);
				}
				else
				{
					$castle = CastleQuery::create()->findOneByName($_source_array[1]);
					
					if(is_null($castle))
					{
						$castle = new Castle();
					}
				}
				
				$castle->setName($_source_array[1]);
				$castle->setPoints($_source_array[2]);
				$castle->setOpenPopulation($_source_array[7]);
				$castle->setCopper($_source_array[8]);
				$castle->setSilver($_source_array[9]);
				$castle->setCurrentSt($_source_array[10]);
				$castle->setCurrentSk($_source_array[11]);
				$castle->setCurrentBs($_source_array[12]);
				$castle->setCurrentAs($_source_array[13]);
				$castle->setCurrentPr($_source_array[14]);
				$castle->setCurrentLr($_source_array[15]);
				$castle->setCurrentHk($_source_array[16]);
				$castle->setCurrentOk($_source_array[17]);
				$castle->setLastImport(time());
				
				if(!$coord == false)
				{	
					$castle->setCoordinates($coord);
					preg_match("/([0-9]{1,5}),([0-9]{1,5})/", $coord, $coordXY);
					$castle->setX($coordXY[0]);
					$castle->setX($coordXY[1]);
				}

				$castle->save();
				$imported_castles++;	
			}
    	}
    	$this->view->imported_castles = $imported_castles;
    }

    public function saveAction()
    {
    	$id = $this->_request->getParam('id');
    	$castle = CastleQuery::create()->findPk($id);
    	$castle->fromArray($this->_request->getPost()); 
    	$castle->save();
    	
    	$this->_redirect('/castle');
    }
    
    private function curl($url){
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    	$data = curl_exec($ch);
    	curl_close($ch);
    	return $data;
    }
    
}