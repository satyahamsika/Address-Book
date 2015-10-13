<?php 
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
        $this->db->query($sql);             
    }              
    public function count($tableName, $selCols, $where) 
	{	
		$result = mysqli_query($this->db, "SELECT $selCols FROM $tableName WHERE $where");
		$exist = mysqli_affected_rows($this->db);
			
		return $exist;
	}
	
}
?>



		

		




