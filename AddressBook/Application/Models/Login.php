<?php
class Login
{
	private $emailId = "";
	private $password = "";
	private $hash = "";
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
		$error = array('errorFlag' => false);
		$errorM = array('errorMsg' => "");
		if (empty($this->emailId)) {
			$error['errorFlag'] = true;
			$errorM['errorMsg'] = 'User name cannot be null';
		} elseif (!filter_var($this->emailId, FILTER_VALIDATE_EMAIL)) {
			$error['errorFlag'] = true;
			$errorM['errorMsg'] = 'User name must be valid';
		}
		if (empty($this->password)) {
			$error['errorFlag'] = true;
			$errorM['errorMsg'] = 'Password cannot be null';
		} elseif (!ctype_alnum($this->password)) {
			$error['errorFlag'] = true;
			$errorM['errorMsg'] = 'Password must be alphanumeric';
		}
		
		return $error;
	}
	public function checkUser()
	{
		$this->db = new Database();
		$this->hash = md5($this->password);
		$check['emailid'] = $this->emailId;
		$check['password'] = $this->hash;
		$condMail = $check['emailid'];
		$condPass = $check['password'];
		$where = "email_id = '$condMail' AND password = '$condPass'";
		$isSuccess = $this->db->count('users', 'email_id,password', $where);
		if($isSuccess === 1) {
			return true;
		} 
	}
}
?>

