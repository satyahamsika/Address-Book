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
		$this->db = new Database();
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

		return $error;
	}
	public function checkUser()
	{
		$check['emailid'] = $this->emailId;
		$check['password'] = $this->hash;
		$cond1 = $check['emailid'];
		$cond2 = $check['password'];
		$where = "email_id = '$cond1' AND password = '$cond2'";
		$bol = $this->db->count('users', 'email_id,password', $where);
		if ($bol === true) {
        	return true;
        } else {
        	return false;
        }
	}
}
?>