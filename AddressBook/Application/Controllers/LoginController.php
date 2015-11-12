<?php
require_once '../../AddressBook/Config/Config.php';

class LoginController extends BaseController
{
    /**
    * Validation for user login 
    */
    public function loginAction() 
    {
        $this->render('login');
        if (isset($_POST['submit'])) {
            $login = new Login($_POST);
            $error = $login->validate();
            if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
                $error = implode(",<br/>", $error['errorMsg']);   
                echo "<font color= '#A11409'>$error</font>";                        
            } elseif ($error['errorFlag'] === false) {
                if ($login->checkUser() === true) {
                    $this->redirect('Contacts', 'list');
                } else {
                    echo "Check username and password";
                }
            }
        }
    }
    /**
    * Redirecting to logout page
    */
    public function logoutAction()
    {
        $this->render('logout');
    }
}
?>


               