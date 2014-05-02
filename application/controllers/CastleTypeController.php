<?php

class CastleTypeController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function indexAction()
    {
    	$this->view->layoutTitle = '&Uuml;bersicht Burgtypen';
    	$this->view->layoutHelp  = '/castletype/help_index';    	
    	$this->view->layoutAdd   = '/castletype/update';
    	
        $castleType = new CastleTypeQuery();
        $this->view->castleTypes = $castleType->orderByType()->find();
    }

    public function createAction()
    {
    	$this->view->title = "Burgentyp anlegen";
    	 
    	$this->view->header_back = true;
    	$this->view->footer_cancel = true;
    	$this->view->footer_save = true;
    
    	$castleType = new CastleType();
    
    	if ($this->_request->isPost()) {
    		$castleType->fromArray($this->_request->getPost());
    		$castleType->save();
    	}
    
    	$this->view->castleType = $castleType;
    	 
    	$this->_helper->viewRenderer('update');
    }
    
    public function updateAction()
    {	
    	$id = $this->_request->getParam('id');
 
    	if(is_null($id)) 
    	{
    		$this->view->layoutTitle = 'Burgtyp anlegen';
    		$castleType = new CastleType();   		
    	}
    	else 
    	{
    		$this->view->layoutTitle = 'Burgtyp bearbeiten';
	    	$castleTypeX = new CastleTypeQuery();
	    	$castleType = $castleTypeX->findPk($id);
    	}
    	
    	if ($this->_request->isPost()) 
    	{
    		if(isset($_POST["cancel"])) 
    		{ 
    			$this->_helper->redirector("index", "castletype", "default");
    		}
    		elseif(isset($_POST["save"]))
    		{
    			$postData = $this->_request->getPost();
//    			$form->populate($postData);
//     			echo "<xmp>"; var_dump($this->_request->getPost()); exit;
	    		$castleType->fromArray($postData);
	    		$castleType->setBoolean($postData);
//  	    		echo "<xmp>"; var_dump($castleType); exit;
	    		$castleType->save();
	    		$this->_helper->redirector("index", "castletype", "default");
    		}
    	}
    	
    	$this->view->castleType = $castleType;
    	$this->_helper->_layout->setLayout('layout_2pages');
    }

    public function deleteAction()
    {
    	// action body
    }
    
}