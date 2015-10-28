<?php
require_once '../../AddressBook/Config/Config.php';

class LoginController extends BaseController
{
	public function loginAction() 
	{
		//$fileN = APPHOME . DS . 'Views' . DS . 'login.php';
  		//$view = new Controller();
        //$this->render($fileN);
		//$controller = new Controller();
		//$this->controller->render('login');
		// $controller = new BaseController();
  // 		$controller->render('login');
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
					//$fileN1 = APPHOME . DS . 'Views' . DS . 'listPage.php';
                    //echo $view->render($fileN1);
                    $controller->render('listPage');
                    //header('Location: ../Views/listPage.php');
				} else {
					echo "User does not exist";
				}
			}
		}
	}
}
?>