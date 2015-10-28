<?php
class Logger 
{
	private $logName;
	public function __construct() 
	{ 
		$this->logName = !isset($logName) ? 'error_' . date('Y-m-d') . '.log' : $logName;
		$this->fp = fopen($this->logName, 'a+');
	}		
	public function log($message) 
	{	        
        $time = date('[d/M/Y:H:i:s]');
        fwrite($this->fp, "$time $message" . PHP_EOL);
    }    
	public function __destruct() 
	{
		fclose($this->fp);
	}
}
?>

