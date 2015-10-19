<?php
define('DS', DIRECTORY_SEPARATOR);
define('HOME', dirname(__FILE__));
$url = $_GET['url'];

include_once '/var/www/hamsika.com/public_html/html/AddressBook/Config/Config.php';

function __autoload($class)
{
	if (file_exists(HOME . DS . 'Models' . DS . strtolower($class) . '.php')) {
		require_once HOME . DS . 'Models' . DS . strtolower($class) . '.php';
	} else if (file_exists(HOME . DS . 'Controllers' . DS . strtolower($class) . '.php')) {
		require_once HOME . DS . 'Controllers'  . DS . strtolower($class) . '.php';
	} else if (file_exists(HOME . DS . 'Views' . DS . strtolower($class) . '.php')) {
		require_once HOME . DS . 'Views'  . DS . strtolower($class) . '.php';
	} 
}
if(isset($url)) {
	$url_array = array();
	$url_array = explode("/",$url);
	$controller = isset($url_array[0]) ? $url_array[0] : ''; array_shift($url_array);
	$action = isset($url_array[0]) ? $url_array[0] : ''; array_shift($url_array);
	$controller_name = $controller;
	$controller = ucwords($controller_name) . "Controller";
	$action_name = $action;
	echo $controller;
	$action = $action_name . "Action";
	echo $action;
	$object = new $controller();
	$object->$action();
} 
?>




