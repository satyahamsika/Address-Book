<?php
require_once '../../AddressBook/Config/Config.php';

class SignupController extends BaseController
{
	public function signupAction()
	{
        // $fileN = APPHOME . DS . 'Views' . DS . 'Register.php';
        // $view = new Controller();
        //BaseController::returnView(render('Register.php'));
        //$this->returnView->view->render('Register.php');
        $controller = new BaseController();
        $controller->render('Register');
        if (isset($_POST['submit'])) { 
			$signup = new Signup();
	    	$signup->name = $_POST['name']; 
	    	$signup->emailId = $_POST['emailid']; 
    		$signup->password = $_POST['password'];
    		$signup->confirmPassword = $_POST['cpassword'];
    		$signup->gender = $_POST['gender'];
    		$signup->mobile_no = $_POST['mobno'];     
    		$error =  $signup->validate();
    		if ((isset($error['errorFlag']) && $error['errorFlag']) === false) {
                echo $error['errorMsg'];                               
            	if ($error['errorFlag'] === false) {
                    if ($signup->addUser() === true) {
                        //$this->returnView->view->render($fileName);
                        $controller->render('listPage');
                        //header('Location : ../Views/listPage.php');                           		   
            		} else {
                        echo "not registered sucessfully";
                    }
        		}   
		    } 
		
	   }
    }
}
?>
 