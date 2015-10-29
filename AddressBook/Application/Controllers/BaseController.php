<?php
require_once '../../AddressBook/Config/Config.php';

abstract class BaseController
{
	public $fileName;
	protected function render($fileName) 
    {  
    	$view = new View();
	    echo $view->render($fileName);
	}
	protected function redirect($controllerName, $actionName) 
	{
		$location = "http://" . $_SERVER['SERVER_NAME'] . "/" . $controllerName . "/" . $actionName;
		header("Location: " . $location);
		exit;
	}
}
?>




