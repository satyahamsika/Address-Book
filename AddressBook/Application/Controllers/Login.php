<?php
require_once "../../Config/Config.php";
require_once "../../Application/Models/Database.php";
require_once "../../Application/Views/login.php";

class Login
{
	public $emailId = "";
	public $password = "";
	public $hash = "";
	public $cond1 = "";
	public $cond2 = ""; 
	public function __construct($params) 
	{
		if (is_array($params)) {
		 	$this->emailId = $params['emailid'];
			$this->password = $params['password'];
			$this->hash = md5($this->password);
			$this->db = new Database();
		}
	}
	public function validate()
	{		
		$error = array('errorFlag' => false, 'errorMsg' => "");
		if (empty($this->emailId)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name cannot be null';
		} elseif (!ctype_alnum($this->emailId)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name must be alphanumeric';
		}
		if (empty($this->password)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Password cannot be null';
		} elseif (!ctype_alnum($this->password)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Password must be alphanumeric';
		}
	}
	public function checkUser()
	{
		$check['emailid'] = $this->emailId;
		$check['password'] = $this->hash;
		$cond1 = $check['emailid'];
		$cond2 = $check['password'];
		$where = "email_id = '$cond1' AND password = '$cond2'";
		$this->db->count('users', 'email_id,password', $where);
		header('Location: http://www.google.com/');
	}
}
?>