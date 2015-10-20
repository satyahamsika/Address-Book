<?php
require_once '../../AddressBook/Config/Config.php';

class SignupController extends Controller
{
	public function signupAction()
	{
        $controller = new Controller();
        $controller->render('Register');
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
                    echo "Registered Sucessfully";            		   
        		}
    		}   
		} 
		
	}
}
?>


    
