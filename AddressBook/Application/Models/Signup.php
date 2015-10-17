<?php

require_once "/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/Database.php";

class Signup 
{
	private $name = "";
	private $emailId = "";
	private $password = "";
	private $hash = "";
	private $confirmPassword = "";
	private $gender = "";
	private $mobile_no = "";
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
		if (empty($this->name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Name cannot be null';
		} elseif (!ctype_alpha($this->name)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Name must be alphabets';
		}	
		$this->db = new Database();			
		if (empty($this->emailId)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'E-mail id cannot be null';
		} elseif (!ctype_alnum($this->emailId)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'E-mail id must be alphanumeric';
		}elseif ($this->db->count('users', 'email_id', "email_id = '$this->emailId'" ) > 0) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'E-mail id already exists';
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
			$error['errorMsg'] = 'Mobile no cannot be null';
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
		$this->hash = md5($this->password);
        $add['password'] = $this->hash;
        $add['gender'] = $this->gender;
        $add['mobile_no'] = $this->mobile_no;
        $bol = $this->db->insert('users', $add);	
        if ($bol === true) {
        	return true;
        } else {
        	return false;
        }
    }         
    }		
?>




