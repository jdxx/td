<?php

class CastleLocationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->layoutTitle  = 'Standortliste';
    	$this->view->layoutCreate = '/castlelocation/create';
    	$this->view->layoutHelp = '/castlelocation/help_index';
    	
        $castleLocation = new CastleLocationQuery();
        $this->view->castleLocations = $castleLocation->find();
    }

    public function deleteAction()
    {
        // action body
    }

    public function updateAction()
    {
    	$this->view->layoutTitle  = 'Standort bearbeiten';
    	$this->view->layoutDelete = '/castlelocation/delete';
    	$this->view->layoutHelp = '/castlelocation/help_update';
    	
        $id = $this->_request->getParam('id');
 
    	if(is_null($id)) 
    	{
    		$castleLocation = new CastleLocation();   		
    	}
    	else 
    	{
	    	$castleLocationX = new CastleLocationQuery();
	    	$castleLocation = $castleLocationX->findPk($id);
    	}
    	
    	$parentLocation = new CastleLocationQuery();
    	$this->view->parentLocations = $parentLocation->find();
    	
    	if ($this->_request->isPost()) 
    	{   		
    		if(isset($_POST["save"]))
    		{
//     			echo "<xmp>"; var_dump($this->_request->getPost());
	    		$castleLocation->fromArray($this->_request->getPost());
//  	    		echo "<xmp>"; var_dump($castleLocation); exit;
	    		$castleLocation->save();
    		}
    		$this->_redirect('/castlelocation/index');
    	}
    	
    	$this->view->castleLocation = $castleLocation;
    }

    public function createAction()
    {
    	$this->view->layoutTitle  = 'Standort anlegen';
    	$this->view->footerHelp = '/castlelocation/help_create';
    	
        $castleLocation = new CastleLocation();
        
        $parentLocation = new CastleLocationQuery();
        $this->view->parentLocations = $parentLocation->find();
        
        if ($this->_request->isPost()) {
        	$castleLocation->fromArray($this->_request->getPost());
        	$castleLocation->save();
        }
        
        $this->view->castleLocation = $castleLocation;
       
//        $this->_helper->viewRenderer('update');
    }


}