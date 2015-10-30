<?php
class AddressBook
{
	public $contact_name = "";
	public $contact_address = "";
	public $contact_phone_no  = "";
	public $country_name = "";
	public $state_name = "";
	public $city_name = "";
	public $db = "";
	public function __construct($params) 
	{
		if (is_array($params)) {
		 	$this->contact_name = $params['contact_name'];
		    $this->contact_address = $params['contact_address'];
			$this->contact_phone_no = $params['contact_phone_no'];
			$this->country_name = $params['country_name'];
			$this->state_name = $params['state_name'];
			$this->city_name = $params['city_name'];
			$this->db = new Database();
		}
	}
	public function validate() 
	{
		$error = array('errorFlag' => false, 'errorMsg' => array());
		if (empty($this->contact_name)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Name cannot be null");
		} elseif (!ctype_alpha($this->contact_name)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Name must be alphabets");
		}	
		if (empty($this->contact_address)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Address cannot be null");
		}
		if (empty($this->contact_phone_no)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Mobile no cannot be null");
		} elseif (!ctype_digit($this->contact_phone_no)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] , "Mobile no must be numeric");	
		} 
		if (empty($this->country_name)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Country cannot be null");
		} 
		if (empty($this->state_name)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "State cannot be null");
		}
		if (empty($this->city_name)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "City cannot be null");
		}
		
		return $error;
	}
	public function addAddress()
	{
		$this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$this->db = new Database();
		$add['contact_name'] = $this->contact_name;
		$add['contact_phone_no '] = $this->contact_phone_no;
		$add['contact_address'] = $this->contact_address;
		// $proc = "CALL insertProc()";
		// $result = mysqli_query($this->db, $proc);
		$result = $this->db->insert('contacts', $add);
		//$this->db->insert('address',$addd);
		//$sqli = "INSERT INTO address(contact_address) values ('$this->contact_address')";
		//$result = mysqli_query($this->db, $sqli);
		
		return $result;
	}
    public function listAddress()
    {
    	$add['contact_name'] = $this->contact_name;
		$add['contact_phone_no '] = $this->contact_phone_no;
		$addd['contact_address'] = $this->contact_address;
		$result = $this->db->select('contacts', $add, 'address', $addd);
    	
    	return $result;
    }     
}
?>
