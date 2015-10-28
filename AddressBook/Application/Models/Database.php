<?php 
require_once "../../AddressBook/Config/Config.php";

class Database 
{
    public $db = "";	
	public function __construct() 
	{
		$this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		//$this->logValue = new Logger();
	}
	// public function query($sql) 
 //    {	
	// 	if (!$this->db) {
 //        	$this->logValue->log(mysqli_connect_error($this->db));
 //        }
	// 	if (!mysqli_query($this->db, $sql)) {				
	// 		$this->logValue->log(mysqli_error($this->db));
	// 	}
	// }	
	public function insert($tableName, $values) 
	{
		$column = implode(",", array_keys($values));
        $value = "'" . implode("','", array_values($values)) . "'";
        $sql = "INSERT INTO $tableName ($column) VALUES ($value)"; 
        $result = mysqli_query($this->db, $sql);  
        if ($result) {
        	return true;
        } else {
        	return false;
        }
    }              
    public function count($tableName, $selCols, $where) 
	{	
		$sql = "SELECT $selCols FROM $tableName WHERE $where";
		$result = mysqli_query($this->db, $sql);
		$exist = mysqli_affected_rows($this->db);
		
		return $exist;
	}
}
?>



		

		




