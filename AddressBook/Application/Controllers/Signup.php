<?php
require_once "../../Config/Config.php";
require_once "/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/Database.php";

class Signup 
{
	public $name = "";
	public $emailId = "";
	public $password = "";
	public $hash = "";
	public $confirmPassword = "";
	public $gender = "";
	public $mobile_no = "";
	public $db = "";
	public function __construct($params) 
	{
		if (is_array($params)) {
		 	$this->name = $params['name'];		 	
		    $this->emailId = $params['emailid'];
			$this->password = $params['password'];
			$this->hash = md5($this->password);
			$this->confirmPassword = $params['cpassword'];
			$this->gender = $params['gender'];
			$this->mobile_no = $params['mobno'];			
			$this->db = new Database();
		}
	}
	public function validate() 
	{
		$error = array('errorFlag' => false, 'errorMsg' => "");
		if (empty($this->name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Name cannot be null';
		} elseif (!ctype_alpha($this->name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Name must be alphabets';
		}				
		if (empty($this->emailId)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name cannot be null';
		} elseif (!ctype_alnum($this->emailId)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name must be alphanumeric';
		}
		if ($this->db->count('users', 'email_id', "email_id = '$this->emailId'" ) > 0) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Username already exists';
		}
		if (empty($this->password)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Password cannot be null';
		} elseif (!ctype_alnum($this->password)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Password must be alphanumeric';
		}
		if (empty($this->confirmPassword)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Confirm Password cannot be null';
		} elseif (!ctype_alnum($this->confirmPassword)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Confirm Password must be alphanumeric';
		}
		if (strcmp($this->password, $this->confirmPassword)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Password mismatch';
		}
		if (!isset($this->gender)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Gender cannot be null';
		}
		if (empty($this->mobile_no)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Mobile cannot be null';
		} elseif (!ctype_digit($this->mobile_no)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Mobile no must be numeric';	
		} 

		return $error;
	}
	public function addUser() 
	{
		$add['name'] = $this->name;
		$add['email_id'] = $this->emailId;
        $add['password'] = $this->hash;
        $add['gender'] = $this->gender;
        $add['mobile_no'] = $this->mobile_no;
        $this->db->insert('users', $add); 
        echo "<span style=\"color: green;\">Registered Sucessfully</span>";
        header('Location: http://www.google.com/');
    }
}		
?>





