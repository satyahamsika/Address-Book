<?php
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
	public $logValue = "";
	public function __construct($params) 
	{
		if (is_array($params)) {
		 	$this->name = $params['pname'];
		    $this->emailId = $params['uname'];
			$this->password = $params['password'];
			$this->confirmPassword = $params['cpassword'];
			$this->gender = $params['gender'];
			$this->mobile_no = $params['mobileno'];
			$this->db = new Database();
			$this->logValue = new Logger();
		}
	}
	/**
    * Validating the entered fields
    */
	public function validate() 
	{
		$error = array('errorFlag' => false, 'errorMsg' => array());
		if (empty($this->name)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Name cannot be null");
		} elseif (!ctype_alpha($this->name)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Name must be alphabets");
		} 
		if (empty($this->emailId)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "E-mail id cannot be null");
		} elseif (!filter_var($this->emailId, FILTER_VALIDATE_EMAIL)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "E-mail id must be alphanumeric");
		} elseif ($this->db->count('users', 'email_id', "email_id = '$this->emailId'" ) > 0) {
			$this->logValue->log("E-mail id already exists");
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] ,"E-mail id already exists");
		} 
		if (empty($this->password)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] , "Password cannot be null");
		} elseif (!ctype_alpha($this->password)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'], "Password must be alphabets");
		} 
		if (empty($this->confirmPassword)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] ,"Confirm Password cannot be null");
		} 
		if (!ctype_alpha($this->confirmPassword)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] , "Confirm Password must be alphabets");
		} elseif (strcmp($this->password, $this->confirmPassword)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'],"Password mismatch");
		} 
		if (!isset($this->gender)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] ,"Gender cannot be null");
		} 
		if (empty($this->mobile_no)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] , "Mobile no cannot be null");
		} elseif (!ctype_digit($this->mobile_no)) {
			$error['errorFlag'] = true;
			array_push($error['errorMsg'] , "Mobile no must be numeric");	
		} 

		return $error;
	}
	/**
    * Registering new user
    */
	public function addUser() 
	{
		session_start();
		$_SESSION["user"] = $this->emailId;
		$add['name'] = $this->name;
		$add['email_id'] = $this->emailId;
		$this->hash = md5($this->password);
        $add['password'] = $this->hash;
        $add['gender'] = $this->gender;
        $add['mobile_no'] = $this->mobile_no;
        $isSuccess = $this->db->insert('users', $add);	
        if ($isSuccess === true) {
        	return true;
        } else {
        	return false;
        }
    }         
}		
?>



