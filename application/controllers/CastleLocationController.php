<?php

class CastleLocationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    	define('USERID', 1);
    	define('USERNAME', 'jdx');
    }

    public function indexAction()
    {
  		$this->view->layoutTitle = '&Uuml;bersicht Standorte';
    	$this->view->layoutHelp  = '/castlelocation/help_index';    	
    	$this->view->layoutAdd   = '/castlelocation/create';
    	
        $this->view->castleLocations = CastleLocationQuery::create()->orderByName()->find();
    }

    public function deleteAction()
    {
        // action body
    }

    public function updateAction()
    {
    	$this->view->layoutTitle = 'Standort bearbeiten';
    	
    	$parentLocation = new CastleLocationQuery();
    	$this->view->parentLocations = $parentLocation->find();
    	
    	$id = $this->_request->getParam('id');
 
	    $castleLocationX = new CastleLocationQuery();
	    $castleLocation = $castleLocationX->findPk($id);

    	if ($this->_request->isPost()) 
    	{
    		if(isset($_POST["cancel"])) 
    		{ 
    			$this->_helper->redirector("index", "castlelocation", "default");
    		}
    		elseif(isset($_POST["save"]))
    		{
    			$postData = $this->_request->getPost();
	    		$castleLocation->fromArray($postData);
	    		
				if($castleLocation->getParentId() == 0) 
	    		{
	    			
	    		}
	    		
	    		$castleLocation->save();
	    		$this->_helper->redirector("index", "castlelocation", "default");
    		}
    	}
    	
    	$this->view->castleLocation = $castleLocation;
    	$this->view->parent_id_old = $castleLocation->getParentId();
    }

    public function createAction()
    {
    	$this->view->layoutTitle = 'Standort anlegen';
    	
    	$parentRoot = CastleLocationQuery::create()->findRoot(USERID);
    	$this->view->parentLocations = $parentRoot->getBranch();

    	$castleLocation = new CastleLocation();   		

    	if ($this->_request->isPost()) 
    	{
    		if(isset($_POST["cancel"])) 
    		{ 
    			$this->_helper->redirector("index", "castlelocation", "default");
    		}
    		elseif(isset($_POST["save"]))
    		{
    			$postData = $this->_request->getPost();
	    		$castleLocation->fromArray($postData);
	    		
	    		if($castleLocation->getName() == USERNAME) {
	    			$castleLocation->setUserId(USERID);
	    			$castleLocation->makeRoot();
	    		}
	    		elseif($castleLocation->getParentId() != 0) 
	    		{
	    			$castleLocationParent = CastleLocationQuery::create()->findPk($castleLocation->getParentId());
	    			$castleLocation->insertAsLastChildOf($castleLocationParent);
	    		}
	    		
	    		$castleLocation->save();
	    		$this->_helper->redirector("index", "castlelocation", "default");
    		}
    	}
    	
    	$this->view->castleLocation = $castleLocation;
    	$this->view->parent_id_old = $castleLocation->getParentId();
       
        $this->_helper->viewRenderer('update');
    }
}