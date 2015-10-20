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
	public function select($tableName, $column, $tableName1, $columns)
	{
		$col = array();
		foreach ($column as $key => $value) {
			array_push($col,$key);
		}
		$value = "'" . implode("','", array_values($column)) . "'";
        $columns = implode(",", array_keys($columns));
        $values = "'" . implode("','", array_values($columns)) . "'";
		$sql = "SELECT $tableName.$col[0],$tableName.$col[1], $tableName1.$columns FROM $tableName INNER JOIN $tableName1 ON $tableName.contact_id = $tableName1.contact_id";
		$result = mysqli_query($this->db, $sql);  
	}	
}
?>



		

		




