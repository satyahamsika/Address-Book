<?php
define('DS', DIRECTORY_SEPARATOR);
define('HOME', dirname(__FILE__));

require_once '/var/www/hamsika.com/public_html/html/sample folder/OOPSAssignment/Config/Config.php';

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
if (isset($_GET['load'])) {
	$params = array();
	$params = explode("/", $_GET['load']);
	$controller = ucwords($params[0]);	
	if (isset($params[1]) && !empty($params[1])) {
		$action = $params[1];
	}	
	if (isset($params[2]) && !empty($params[2])) {
		$query = $params[2];
	}
}
?>
