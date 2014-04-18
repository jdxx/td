<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initPropel()
	{
       require '../library/propel/runtime/lib/Propel.php';
       Propel::init(APPLICATION_PATH . '/configs/orm-conf.php');
       Propel::initialize();

       return Propel::getConnection(); 
	}

	protected function _initRouter()
	{
		$router = Zend_Controller_Front::getInstance()->getRouter();
		
		$routerConfigPath = APPLICATION_PATH . '/configs/router.ini';
		if (file_exists($routerConfigPath)) {
			$config = new Zend_Config_Ini($routerConfigPath, APPLICATION_ENV);
			$router->addConfig($config, 'routes');
		}
	}
	
	protected function _initConstants()
	{
		define("APP_NAME", 			"TotalDefense v0.1");
		define("APP_TITLE", 		"TD :: ");
		define("POPULATION_MAX", 	4300);
		
	}
}