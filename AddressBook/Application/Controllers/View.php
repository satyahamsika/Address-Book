<?php
class View 
{
	public function render($fileName) 
    {  
    	extract($fileName);
		ob_start();
        include $fileName;
        $renderedView = ob_get_clean();

        return $renderedView;		
    }
}
?>


