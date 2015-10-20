<?php
require_once "../../Application/Models/Database.php";

class AddressBook
{
	private $contact_name = "";
	private $contact_address = "";
	private $contact_phone_no  = "";
	private $country_name = "";
	private $state_name = "";
	private $city_name = "";
	private $db = "";
	public function __get($name)
	{
		return $this->$name;
	}
	public function __set($name, $value) 
	{
		$this->$name = $value;

		return $this;
	}
	public function validate() 
	{
		$error = array('errorFlag' => false, 'errorMsg' => "");
		$this->db = new Database();
		if (empty($this->contact_name)) {			
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Name cannot be null';
		} elseif (!ctype_alpha($this->contact_name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Name must be alphabets';
		}	
		if (empty($this->contact_address)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Address cannot be null';
		} 
		if (empty($this->contact_phone_no)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Mobile no cannot be null';
		} elseif (!ctype_digit($this->contact_phone_no)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Mobile no must be numeric';	
		} 
		if (empty($this->country_name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Country cannot be null';
		} 
		if (empty($this->state_name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'State cannot be null';
		}
		if (empty($this->city_name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'City cannot be null';
		}
		
		return $error;
	}
	public function addAddress()
	{
		$add['contact_name'] = $this->contact_name;
		$add['contact_phone_no '] = $this->contact_phone_no;
		$addd['contact_address'] = $this->contact_address;
		$do = new Database();
		$do->insert('contacts', $add);
		$sqli = "INSERT INTO address(contact_id, contact_address) values (LAST_INSERT_ID(), '$this->contact_address')";
		$result = mysqli_query($do->db, $sqli);
	}
    public function listAddress()
    {
    	$add['contact_name'] = $this->contact_name;
		$add['contact_phone_no '] = $this->contact_phone_no;
		$addd['contact_address'] = $this->contact_address;
		$do = new Database();
    	$result = $do->select('contacts', $add, 'address', $addd);
    	
    	return $result;
    }     
}
?>

