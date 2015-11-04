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
                if ($login->checkUser() === true) {
                    $this->redirect('Contacts', 'list');
                } else {
                    echo "Check username and password";
                }
            }
        }
    }
    public function logoutAction()
    {
        $this->render('logout');
    }

}
?>


