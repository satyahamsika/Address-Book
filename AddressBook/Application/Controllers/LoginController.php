<?php
require_once '../../AddressBook/Config/Config.php';

class LoginController extends BaseController
{
	public function loginAction() 
	{
		$this->render('login');
		if (isset($_POST['submit'])) {
			$login = new Login($_POST);
			$error = $login->validate();
			if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
				echo $error['errorMsg'];            
        	} elseif ($error['errorFlag'] === false) {
        		echo "error flag is false";
				if ($login->checkUser() === true) {
					echo "after checking the user";
					$this->redirect('Contacts', 'list');
				} else {
					echo "User does not exist";
				}
			}
		}
	}
}
?>


