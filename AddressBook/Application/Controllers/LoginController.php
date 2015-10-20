<?php
require_once '../../AddressBook/Config/Config.php';

class LoginController extends Controller
{
	public function loginAction() 
	{
		$controller = new Controller();
		$controller->render('login');
		if (isset($_POST['submit'])) {
			$login = new Login($_POST);
			$login->emailId = $_POST['emailid'];
			$login->password = $_POST['password'];
			$error = $login->validate();
			if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
				echo $error['errorMsg'];            
        	}
			if ($error['errorFlag'] === false) {
				if ($login->checkUser() === true) {
					echo "success";
				}
			}
		}
	}
}
?>