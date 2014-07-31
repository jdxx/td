<?php

class OffensiveController extends Zend_Controller_Action
{

    public function init()
    {
//		Sekunden pro Feld.    	
        $this->speed_st = 665;
        $this->speed_sk = 760;
        $this->speed_bs = 475;
        $this->speed_as = 570;
        $this->speed_pr = 285;
        $this->speed_lr = 380;
        $this->speed_hk = 760;
        $this->speed_ok = 950;
        
        $this->colorID   = 0;
        $this->dateColor = array();
    }

    public function indexAction()
    {
    	$this->view->layoutTitle = 'Angriffe bearbeiten';
    	$this->view->layoutHelp  = '/offensive/help_index';
    	$this->view->layoutAdd   = '/offensive/update';
    	 
    	$this->view->targets = TargetQuery::create()->orderByName()->find();
    }

    public function createAction()
    {
    	$this->view->layoutTitle = 'Angriff erstellen';
    	 
    	$target = new Target();
    
    	if ($this->_request->isPost())
    	{
    		if(isset($_POST["cancel"]))
    
    		{
    			$this->_helper->redirector("index", "offensive", "default");
    		}
    		elseif(isset($_POST["save"]))
    		{
    			$postData = $this->_request->getPost();
    			$target->fromArray($postData);
    			$target->setBoolean($postData);
    			$target->save();
    			$this->_helper->redirector("index", "offensive", "default");
    		}
    	}
    	 
    	$this->view->target = $target;
    	 
    	$this->_helper->viewRenderer('update');
    }

    public function updateAction()
    {
//     	$this->view->layoutTitle    = 'Angriff bearbeiten';
//     	$this->view->layoutHelp     = '/offensive/help_update';
    	 
    	$id = $this->_request->getParam('id');
//     	$target = TargetQuery::create()->findPk($id);

    	if(is_null($id))
    	{
    		$this->view->layoutTitle = 'Angriff anlegen';
    		$target = new Target();
    	}
    	else
    	{
    		$this->view->layoutTitle = 'Angriff bearbeiten';
    		$target = TargetQuery::create()->findPk($id);
    	}
    	
    	if ($this->_request->isPost()) {
    		if(isset($_POST["cancel"]))
    		{
    			{
    				$this->_helper->redirector("index", "offensive", "default");
    			}
    			 
    		}
    		elseif(isset($_POST['save']) || isset($_POST['save+activities']))
    		{
    			$postData = $this->_request->getPost();
    			$target->fromArray($postData);
    			$target->setBoolean($postData);
    			echo "<xmp>"; var_dump($target);
    			$target->save();
    			
    			if(isset($_POST['save']))
    				$this->_helper->redirector("index", "offensive", "default");
    			else
    				$this->_helper->redirector("list", "offensive", "default", array('id' => $target->getId()));
    		}
    	}
    	 
    	$this->view->target = $target;
    }
    
    public function listAction()
    {
    	$id = $this->_request->getParam('id');
    	$target = TargetQuery::create()->findPk($id);
    	
    	$this->view->layoutTitle    = 'Angriffsplan auf ' . $target->getName();
    	
    	// $target = "l+k://coordinates?16678,16602&46";
    	
    	preg_match("/([0-9]{1,5}),([0-9]{1,5})/", $target->getCoordinates() , $coordXY);
    	$targetX = $coordXY[1];
    	$targetY = $coordXY[2];
    	 
    	$castle = new CastleQuery();
    	$castles = $castle->orderById()->where('coordinates is not null')->limit(10)->find();
//    	$castles = $castle->orderById()->where('coordinates is not null')->find();
    	
    	foreach($castles as $_castle) 
		{
			$distance = self::calcDistance(array("X" => $_castle->getX(), "Y" => $_castle->getY()), array("X" => $targetX, "Y" => $targetY));

			$_castle->distance = $distance;
			
			$datetime = self::calcTime($this->speed_st, $distance, $target);
			$_castle->date_st  = substr($datetime, 0, 5);
			$_castle->time_st  = substr($datetime, 6, 5);
			$_castle->color_st = self::setColor($_castle->date_st); 

			$datetime = self::calcTime($this->speed_sk, $distance, $target);
			$_castle->date_sk  = substr($datetime, 0, 5);
			$_castle->time_sk  = substr($datetime, 6, 5);
			$_castle->color_sk = self::setColor($_castle->date_sk);
			
			$datetime = self::calcTime($this->speed_bs, $distance, $target);
			$_castle->date_bs  = substr($datetime, 0, 5);
			$_castle->time_bs  = substr($datetime, 6, 5);
			$_castle->color_bs = self::setColor($_castle->date_bs);
			
			$datetime = self::calcTime($this->speed_as, $distance, $target);
			$_castle->date_as  = substr($datetime, 0, 5);
			$_castle->time_as  = substr($datetime, 6, 5);
			$_castle->color_as = self::setColor($_castle->date_as);
			
			$datetime = self::calcTime($this->speed_lr, $distance, $target);
			$_castle->date_lr  = substr($datetime, 0, 5);
			$_castle->time_lr  = substr($datetime, 6, 5);
			$_castle->color_lr = self::setColor($_castle->date_lr);
			
			$datetime = self::calcTime($this->speed_pr, $distance, $target);
			$_castle->date_pr  = substr($datetime, 0, 5);
			$_castle->time_pr  = substr($datetime, 6, 5);
			$_castle->color_pr = self::setColor($_castle->date_pr);
			
			$datetime = self::calcTime($this->speed_hk, $distance, $target);
			$_castle->date_hk  = substr($datetime, 0, 5);
			$_castle->time_hk  = substr($datetime, 6, 5);
			$_castle->color_hk = self::setColor($_castle->date_hk);
			
			$datetime = self::calcTime($this->speed_ok, $distance, $target);
			$_castle->date_ok  = substr($datetime, 0, 5);
			$_castle->time_ok  = substr($datetime, 6, 5);
			$_castle->color_ok = self::setColor($_castle->date_ok);

			$castle_arr[] = $_castle;
		}
		
		$this->sort = $target->getSort();
		
		usort($castle_arr, function($a, $b)
		{
			switch ($this->sort) {
				case 'time': return $a->distance - $b->distance;
				case 'silver' : return $a->silver - $b->silver;
			}
		});

//		echo "XXXX"; exit;
		if ($this->_request->isPost()) {
			
			if(isset($_POST['update']))
			{
				$postData = $this->_request->getPost();
				$target->fromArray($postData);
				$target->setBoolean($postData);
				$target->save();
				 
				if(isset($_POST['save']))
					$this->_helper->redirector("index", "offensive", "default");
				else
					$this->_helper->redirector("list", "offensive", "default", array('id' => $target->getId()));
			}
		}
		
		$this->view->target  = $target;
		$this->view->castles = $castle_arr;
    }
    
    private function calcDistance($start, $end)
    {
    	$Ax = $start["X"] - floor($start["Y"] / 2);
    	$Ay = $start["X"] + ceil($start["Y"] / 2);
    	$Bx = $end["X"] - floor($end["Y"] / 2);
    	$By = $end["X"] + ceil($end["Y"] / 2);
    	
    	$Dx = $Bx - $Ax;
    	$Dy = $By - $Ay;
    	
    	if(self::sign($Dx) == self::sign($Dy))
    		return max(abs($Dx),abs($Dy));
    	else 
    		return abs($Dx) + abs($Dy);
    }
    
    private function sign($n) {
    	return ($n > 0) - ($n < 0);
    }
    
    private function calcTime($speed, $distance, $target)
    {
    	$distance_sec = $speed * $distance;
    	$time_hh = floor($distance_sec / 3600);
    	$distance_sec = $distance_sec - $time_hh * 3600;
    	$time_mm = floor($distance_sec / 60);
    	$time_ss = $distance_sec - $time_mm * 60;
    	
    	$base_day  = substr($target->getDate(), 0, 2);
    	$base_mon  = substr($target->getDate(), 3, 2);
    	$base_year = substr($target->getDate(), 6, 4);
    	
    	$base_hour = substr($target->getTime(), 0, 2);
    	$base_min  = substr($target->getTime(), 3, 2);
    	
    	if($target->getStartTime())
    		$result = date('d.m H:i', mktime($base_hour + $time_hh, $base_min + $time_mm, $time_ss, $base_mon, $base_day, $base_year));
    	else
    		$result = date('d.m H:i', mktime($base_hour - $time_hh, $base_min - $time_mm, $time_ss, $base_mon, $base_day, $base_year));
    	
     	return $result;
    }
    
    private function setColor($date)
    {
    	if(isset($this->dateColor[$date]))
    		$colorID = $this->dateColor[$date];
    	else
    	{
    		if($this->colorID > 6)
				$this->colorID = 0;

    		$this->colorID++;
    		$this->dateColor[$date] = $this->colorID;
    		$colorID = $this->colorID;
    	}
    	 
    	return $colorID;
    }

}

