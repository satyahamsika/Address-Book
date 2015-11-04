<?php
class Login
{
	public $userId = "";
	public $emailId = "";
	public $password = "";
	public $hash = "";
	public function __construct($params) 
	{
		if (is_array($params)) {
			$this->userId = $params['userid'];
		 	$this->emailId = $params['emailid'];
			$this->password = $params['password'];
			$this->db = new Database();
		}
	}
	public function validate()
	{		
		$error = array('errorFlag' => false, 'errorMsg' => "");
		if (empty($this->emailId)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name cannot be null';
		} elseif (!filter_var($this->emailId, FILTER_VALIDATE_EMAIL)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name must be valid';
		} elseif (empty($this->password)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Password cannot be null';
		} elseif (!ctype_alnum($this->password)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Password must be alphanumeric';
		}
		
		return $error;
	}
	public function checkUser()
	{
		$this->hash = md5($this->password);
		$check['emailid'] = $this->emailId;
		$check['password'] = $this->hash;
		$condMail = $check['emailid'];
		$condPass = $check['password'];
		$where = "email_id = '$condMail' AND password = '$condPass'";
		$isSuccess = $this->db->count('users', 'user_id,email_id,password', $where);
		if($isSuccess === 1) {
			return true;
		} 
	}
}
?>

