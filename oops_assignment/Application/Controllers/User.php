<?php
class User 
{
	public $firstname = "";
	public $lastname = "";
	public $username = "";
	public $password = "";
	public $confirmPassword = "";
	public $month = "";
	public $day = "";
	public $year = "";
	public $mobno = "";
	public $addddress = "";
	public $pincode = "";
	public $location = "";
	public $gen = "";
	public $db = "";
	public function __construct($params) 
	{
		if (is_array($params)) {
		 	$this->firstname = $params['fname'];
		    $this->lastname = $params['lname'];
			$this->username = $params['username'];
			$this->password = $params['password'];
			$this->confirmPassword = $params['confirmpassword'];
			$this->month = $params['month'];
			$this->day = $params['day'];
			$this->year = $params['year'];
			$this->gen = $params['gender'];
			$this->mobno = $params['mobno'];
			$this->pincode = $params['pincode'];
			$this->location = $params['location'];	
			$this->address = $params['address'];
			$this->db = new Database();
			$this->logValue = new Logger();
		}
	}
	public function validate() 
	{
		$error = array('errorFlag' => false, 'errorMsg' => "");
		if (empty($this->firstname)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'First name cannot be null';
		} elseif (!ctype_alpha($this->firstname)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'First name must be alphabets';
		}				
		if (empty($this->lastname)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Last name cannot be null';
		} elseif (!ctype_alpha($this->lastname)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Last name must be alphabets';
		}
		if (empty($this->username)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name cannot be null';
		} elseif (!ctype_alnum($this->username)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'User name must be alphanumeric';
		}
		if ($this->db->count('userinfo', 'username', "username = '$this->username'" ) > 0) {
			$this->logValue->log("Username already exists");
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
		if (empty($this->month)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Birth month cannot be null';
		}
		if (empty($this->day)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Birth date cannot be null';
		}
		if (empty($this->year)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Birth year cannot be null';
		}
		if (!isset($this->gen)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Gender cannot be null';
		}
		if (empty($this->location)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Location cannot be null';
		}
		if (empty($this->mobno)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Mobile cannot be null';
		} elseif (!ctype_digit($this->mobno)) {
			$error['errorFlag'] = true;
			$error['errorMsg'] = 'Mobile no must be numeric';	
		} 

		return $error;
	}
	public function addUser() 
	{
		$add['firstname'] =	$this->firstname;
        $add['lastname'] = $this->lastname;
        $add['username'] = $this->username;
        $add['password'] = $this->password;
        $add['confirmpassword'] = $this->confirmPassword;
        $add['month'] = $this->month;
        $add['day'] = $this->day;
        $add['year'] = $this->year;
        $add['gender'] = $this->gen;
        $add['mobno'] = $this->mobno;
        $add['address'] = $this->address;
        $add['location'] = $this->location;
        $add['pincode'] = $this->pincode;
        $this->db->insert('userinfo', $add); 
        echo "<span style=\"color: green;\">Registered Sucessfully</span>";
    }
}		
?>





