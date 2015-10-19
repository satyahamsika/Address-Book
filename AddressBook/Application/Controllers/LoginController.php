<?php
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Views/login.php';
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/Login.php'; 

class LoginController 
{
	function loginAction() 
	{
		echo "Function into login";
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
					return true;
					//header('Location: ../Views/listPage.php");
				}
			}
		}
	}
}
?>