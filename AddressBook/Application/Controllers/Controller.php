<?php
class Controller 
{
    public function render($file) 
    {  
		$view = new View();
		echo $view->render('viewfile.php', array('foo' => 'bar'));
    }
}
?>


