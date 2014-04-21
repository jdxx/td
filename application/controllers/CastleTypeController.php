<?php

class CastleTypeController extends Zend_Controller_Action
{

    public function init()
    {
        $this->bergfried_level = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0);
        
        $this->zeughaus_level = array(  1  => 0,
        					2  => 1,
        					3  => 2,
        					4  => 3,
        					5  => 4,
        					6  => 6,
        					7  => 8,
        					8  => 10,
        					9  => 12,
        					10 => 15,
        					11 => 18,
        					12 => 21,
        					13 => 24,
        					14 => 28,
        					15 => 32,
        					16 => 36,
        					17 => 40,
        					18 => 45,
        					19 => 50,
        					20 => 55,
        					21 => 60,
        					22 => 66,
        					23 => 72,
        					24 => 78,
        					25 => 84,
        					26 => 91,
        					27 => 98,
        					28 => 105,
        					29 => 112,
        					30 => 120
        );
        $taverne = array(   1  => 0,
        					2  => 1,
			        		3  => 2,
			        		4  => 3,
			        		5  => 4,
			        		6  => 5,
			        		7  => 6,
			        		8  => 7,
			        		9  => 8,
			        		10 => 9
       	);
        $markt = array( 1  => 0,
        				2  => 1,
		        		3  => 3,
		        		4  => 6,
		        		5  => 10,
		        		6  => 15,
		        		7  => 21,
		        		8  => 28
        );
    }

    public function indexAction()
    {
    	$this->view->layoutTitle = 'Burgtypen bearbeiten';
    	$this->view->layoutHelp  = '/castletype/help_index';    	
    	$this->view->layout_add  = true;
    	
        $castleType = new CastleTypeQuery();
        $this->view->castleTypes = $castleType->find();
    }

    public function deleteAction()
    {
        // action body
    }

    public function updateAction()
    {
    	$id = $this->_request->getParam('id');
 
    	if(is_null($id)) 
    	{
    		$castleType = new CastleType();   		
    	}
    	else 
    	{
	    	$castleTypeX = new CastleTypeQuery();
	    	$castleType = $castleTypeX->findPk($id);
    	}
    	
    	if ($this->_request->isPost()) {
    		if(isset($_POST["cancel"])) 
    		{ 
    			{
    				$this->_helper->redirector("index", "castletype", "default");
    			}

    		}
    		elseif(isset($_POST["save"]))
    		{
//     			echo "<xmp>"; var_dump($this->_request->getPost());
    			$castleType->initBoolean();
	    		$castleType->fromArray($this->_request->getPost());
//  	    		echo "<xmp>"; var_dump($castleType); exit;
	    		$castleType->save();
	    		$this->_helper->redirector("index", "castletype", "default");
    		}
    	}
    	elseif(is_null($id)) 
    	{
    		$castleType->init();
    	}
    	
    	$this->view->castleType = $castleType;
    	
    }

    public function getlimitAction()
    {
    	$id = $this->_request->getParam('id');
 
    	if(is_null($id)) 
    	{
    		$castleType = new CastleType();   		
    	}
    	else 
    	{
	    	$castleTypeX = new CastleTypeQuery();
	    	$castleType = $castleTypeX->findPk($id);
    	}
    	
    	if ($this->_request->isPost()) {
    		if(isset($_POST["cancel"])) 
    		{
    			if(is_null($id)) 
    			{
    				$this->_helper->redirector("create", "castletype", "default");
    			}
    			else 
    			{
    				$this->_helper->redirector("update", "castletype", "default", array("id" => $id));
    			}
    		}
    		elseif(isset($_POST["save"]))
    		{
//     			echo "<xmp>"; var_dump($this->_request->getPost());
    			$castleType->initBoolean();
	    		$castleType->fromArray($this->_request->getPost());
//  	    		echo "<xmp>"; var_dump($castleType); exit;
	    		$castleType->save();
	    		$this->_helper->redirector("update", "castletype", "default", array("id" => $castleType->getId()));
    		}
    	}
    	elseif(is_null($id)) 
    	{
    		$castleType->init();
    	}
    	
    	$this->view->castleType = $castleType;
    }
    
    public function createAction()
    {
    	$this->view->title = "Burgentyp anlegen";
    	
        $this->view->header_back = true;
        $this->view->footer_cancel = true;
        $this->view->footer_save = true;
        
        $castleType = new CastleType();

//         $population = POPULATION_MAX;
//         $population -= $this->zeughaus_level[$castleType->getBergfried()];
        
//        $this->view->population = $population;
        
        if ($this->_request->isPost()) {
        	$castleType->fromArray($this->_request->getPost());
        	$castleType->save();
        }
        
        $this->view->castleType = $castleType;
       
        $this->_helper->viewRenderer('update');
    }
}