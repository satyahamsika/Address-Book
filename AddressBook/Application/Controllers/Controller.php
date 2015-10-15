<?php

class LoginController 
{
	function newLogin() 
	{
		if (isset($_POST['submit'])) {
			$login = new Login($_POST);
			$login->emailId = $_POST['emailid'];
			$login->password = $_POST['password'];
			$error = $login->validate();
			if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
            echo $error['errorMsg'];            
        	}
			if ($error['errorFlag'] === false) {
				if ($login->checkUser === true) {
					header('Location: ../Application/Views/listPage.html');
				}
			}
		}
	}
}
class SignupController 
{
	function newSignup()
	{
		if (isset($_POST['submit'])) { 			    
	    	$signup = new Signup($_POST);
	    	$signup->name = $_POST['name']; 
	    	$signup->emailId = $_POST['emailid']; 
    		$signup->password = $_POST['password'];
    		$signup->confirmPassword = $_POST['cpassword'];
    		$signup->gender = $_POST['gender'];
    		$signup->mobile_no = $_POST['mobno']; 
    		$error =  $signup->validate();
    		if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
            echo $error['errorMsg'];            
        	} 
    		if ($error['errorFlag'] === false) {
    			if ($signup->addUser() === true) {
            		header('Location: ../Application/Views/listPage.html');         
        		}
    		}   
		}
	}
}
?>