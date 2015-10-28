<?php
require_once '../../AddressBook/Config/Config.php';
//require_once '/var/www/hamsika.com/public_html/html/Untitled Folder/AddressBook/Application/Controllers/View.php';

abstract class BaseController
{
	// private $registry;
	// public function __construct($registry) 
	// {
 	//      $this->registry = $registry;
	// }
	protected function render($fileName) 
    {  
    	ob_start();
        include APPHOME . DS . 'Views' . DS . $fileName . '.php';
        $renderedView = ob_get_clean();

        return $renderedView;		
    }
	// protected function returnView()
	// {
	// 	$view = new View();
	// 	echo $view->render($fileName);
	// }
}
?>




