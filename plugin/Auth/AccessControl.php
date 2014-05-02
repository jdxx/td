<?php

class plugin_Auth_AccessControl extends Zend_Controller_Plugin_Abstract
{
	public function __construct(Zend_Auth $auth, Zend_Acl $acl)
	{
		$this->_auth = $auth;
		$this->_acl  = $acl;
	}
	
	public function
	routeStartup(Zend_Controller_Request_Abstract $request)
	{
		if (!$this->_auth->hasIdentity() && null !== $request->getPost('login_user') && null !== $request->getPost('login_password')) {
			// POST-Daten bereinigen
			$filter = new Zend_Filter_StripTags();
			$username = $filter->filter($request->getPost('login_user'));
			$password = $filter->filter($request->getPost('login_password'));
			if (empty($username)) {
				$message = 'Bitte Benutzernamen angeben.';
			}
			elseif (empty($password)) {
				$message = 'Bitte Passwort angeben.';
			}
			else
			{
				$authAdapter = new Plugin_Auth_AuthAdapter();
				$authAdapter->setIdentity($username);
				$authAdapter->setCredential($password);
				$result = $this->_auth->authenticate($authAdapter);
				if (!$result->isValid()) {
					$messages = $result->getMessages();
					$message = $messages[0];
				} else {
					$storage = $this->_auth->getStorage();
					// die gesamte Tabellenzeile in der Session speichern,
					// wobei das Passwort unterdrŸckt wird
					$storage->write($authAdapter->getResultRowObject(null, 'password'));
				}
	
				$registry = Zend_Registry::getInstance();
				$view = $registry->view;
			}
	
			if (isset($message)) {
				$view->message = $message;
			}
		}
	}
	
	
	public function
	routeStartup(Zend_Controller_Request_Abstract $request)
	{
		if (!$this->_auth->hasIdentity() && null !== $request->getPost('login_user') && null !== $request->getPost('login_password')) {
			// POST-Daten bereinigen
			$filter = new Zend_Filter_StripTags();
			$username = $filter->filter($request->getPost('login_user'));
			$password = $filter->filter($request->getPost('login_password'));
			if (empty($username)) {
				$message = 'Bitte Benutzernamen angeben.';
			}
			elseif (empty($password)) {
				$message = 'Bitte Passwort angeben.';
			}
			else
			{
				$authAdapter = new Plugin_Auth_AuthAdapter();
				$authAdapter->setIdentity($username);
				$authAdapter->setCredential($password);
				$result = $this->_auth->authenticate($authAdapter);
				if (!$result->isValid()) {
					$messages = $result->getMessages();
					$message = $messages[0];
				} else {
					$storage = $this->_auth->getStorage();
					// die gesamte Tabellenzeile in der Session speichern,
					// wobei das Passwort unterdrŸckt wird
					$storage->write($authAdapter->getResultRowObject(null, 'password'));
				}
	
				$registry = Zend_Registry::getInstance();
				$view = $registry->view;
			}
	
			if (isset($message)) {
				$view->message = $message;
			}
		}
	}
}