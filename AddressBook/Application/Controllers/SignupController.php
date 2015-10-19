<?php
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Views/Register.php';
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/Signup.php';

class SignupController 
{
	function signupAction()
	{
        echo "Function into signup";
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
                    echo "success";
            		//header('Location: ../Application/Views/listPage.php');         
        		}
    		}   
		} else {
            //render('views/signup.new.php')
        }
		
	}
}
?>


    