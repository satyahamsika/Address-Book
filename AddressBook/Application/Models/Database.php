<?php 
require_once "/var/www/hamsika.com/public_html/html/AddressBook/Config/Config.php";

class Database 
{
    public $db = "";	
	public function __construct() 
	{
		$this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	}
	public function insert($tableName, $values) 
	{
		$column = implode(",", array_keys($values));
        $value = "'" . implode("','", array_values($values)) . "'";
        $sql = "INSERT INTO $tableName ($column) VALUES ($value)"; 
        echo $sql;
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
		echo $sql;
		$result = mysqli_query($this->db, $sql);
		$exist = mysqli_affected_rows($this->db);
		
		return $exist;
	}
	
}
?>



		

		




