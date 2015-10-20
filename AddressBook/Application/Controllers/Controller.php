<?php
require_once '../../AddressBook/Config/Config.php';

class Controller
{
	public function render($viewName)
	{ 
		if (file_exists(APPHOME . DS . 'Views' . DS . $viewName . '.php')) { 
			require_once APPHOME . DS . 'Views' . DS . $viewName . '.php'; 
		} 
	} 
}
?>
