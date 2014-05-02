<?php

class plugin_Auth_Acl extends Zend_Acl
{
  public function __construct()
  { 
   // RESSOURCES
   $this->add(new Zend_Acl_Resource('user'));
   add(new Zend_Acl_Resource('redaktion'));
   addRole(new Zend_Acl_Role('guest'));
   addRole(new Zend_Acl_Role('redakteur'), 'guest');
   
   $this->addRole(new Zend_Acl_Role('admin'), 'redakteur');
   $this->allow(null, null);
   deny('guest', 'redaktion');
   deny('guest', 'admin');
   
   $this->allow('redakteur','redaktion');
   allow('admin', 'admin');
  }
}
