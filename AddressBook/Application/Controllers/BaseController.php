<?php
require_once '../../AddressBook/Config/Config.php';

abstract class BaseController
{
    public $fileName;   
    /**
    * To render the html page
    */ 
    protected function render($fileName) 
    {  
        $path = APPHOME . DS . 'Views' . DS;
        $view = new View();
        echo $view->render($path . $fileName . '.php');
    }
    /**
    * Redirects the user to specified location
    */
    protected function redirect($controllerName, $actionName) 
    {
        $location = "http://" . $_SERVER['SERVER_NAME'] . "/" . $controllerName . "/" . $actionName;
        header("refresh:0; url = $location");
        exit;
    }
}
?>

