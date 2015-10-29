<?php
require_once '../../AddressBook/Config/Config.php';

class LoginController extends BaseController
{
	public function loginAction() 
	{
		$this->render(APPHOME . DS. 'Views'. DS . 'login.php');
		if (isset($_POST['submit'])) {
			$login = new Login($_POST);
			$error = $login->validate();
			if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
				echo $error['errorMsg'];            
        	} elseif ($error['errorFlag'] === false) {
				if ($login->checkUser() === true) {
					$this->redirect('contacts', 'add');
				} else {
					echo "User does not exist";
				}
			}
		}
	}
}
?>


