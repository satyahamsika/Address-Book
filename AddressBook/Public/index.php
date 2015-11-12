<?php
require_once '../../AddressBook/Config/Config.php';

$url = $_GET['url'];
if (isset($url)) {
    $url_array = array();
    $url_array = explode("/", $url);
    $controller = isset($url_array[0]) ? $url_array[0] : ''; 
    array_shift($url_array);
    $action = isset($url_array[0]) ? $url_array[0] : ''; 
    array_shift($url_array);
    $controllerName = $controller;
    $controller = ucfirst($controllerName) . "Controller";  
    $action = $action . "Action";
    $object = new $controller();    
    $object->$action(); 
} 
?>