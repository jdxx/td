<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function loginAction()
    {
    	$auth = Zend_Auth::getInstance();
    	if ($auth->hasIdentity()) {
    		return $this->_forward('index');
    	}
    	 
    	$form = new Zend_Form();
    	$form->setAction('')->setMethod('post');
    	$user = new Zend_Form_Element_Text('login_user', array('label' => 'Benutzername', 'required' => true));
    	$password = new Zend_Form_Element_Password('login_password', array('label' => 'Passwort', 'required' => true));
    	$submit = new Zend_Form_Element_Submit('submit', array('label' => 'Anmelden'));
    	$form->addElements(array($user, $password, $submit));
    	$this->view->form = $form;
    }
    
    public function logoutAction()
    {
    	Zend_Auth::getInstance()->clearIdentity();
    	$this->view->logout = true;
    }
    
    public function indexAction()
    {
    	$this->view->layoutTitle = '&Uuml;bersicht Anwender';
    	$this->view->layoutHelp  = '/user/help_index';    	
    	$this->view->layoutAdd   = '/user/update';
    	
        $user = new UserQuery();
        $this->view->users = $user->orderByName()->find();
    }

    public function createAction()
    {
    	$this->view->title = "Burgentyp anlegen";
    	 
    	$this->view->header_back = true;
    	$this->view->footer_cancel = true;
    	$this->view->footer_save = true;
    
    	$user = new User();
    
    	if ($this->_request->isPost()) {
    		$user->fromArray($this->_request->getPost());
    		$user->save();
    	}
    
    	$this->view->user = $user;
    	 
    	$this->_helper->viewRenderer('update');
    }
    
    public function updateAction()
    {	
    	$id = $this->_request->getParam('id');
 
    	if(is_null($id)) 
    	{
    		$this->view->layoutTitle = 'Anwender anlegen';
    		$user = new User();   		
    	}
    	else 
    	{
    		$this->view->layoutTitle = 'Anwender bearbeiten';
	    	$userX = new UserQuery();
	    	$user = $userX->findPk($id);
    	}
    	
    	if ($this->_request->isPost()) 
    	{
    		if(isset($_POST["cancel"])) 
    		{ 
    			$this->_helper->redirector("index", "user", "default");
    		}
    		elseif(isset($_POST["save"]))
    		{
    			$postData = $this->_request->getPost();
//    			$form->populate($postData);
//     			echo "<xmp>"; var_dump($this->_request->getPost()); exit;
	    		$user->fromArray($postData);
//  	    		echo "<xmp>"; var_dump($user); exit;
	    		$user->save();
	    		$this->_helper->redirector("index", "user", "default");
    		}
    	}
    	
    	$this->view->user = $user;
    }

    public function deleteAction()
    {
    	// action body
    }

    
}