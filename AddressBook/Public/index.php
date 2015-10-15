<?php
define('DS', DIRECTORY_SEPARATOR);
define('HOME', dirname(__FILE__));

require_once '../Application/Controllers/Controller.php';
require_once "/var/www/hamsika.com/public_html/html/AddressBook/Config/Config.php";

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
$conn = new LoginController();
$conn->newLogin();
?>