<?php
require_once '../../AddressBook/Config/Config.php';

class SignupController extends BaseController
{
    /**
    * Registering the new user
    */
    public function signupAction()
    {        
        if (isset($_POST['submit'])) { 
            $signup = new Signup($_POST);
            $error =  $signup->validate();
            if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
                $error = implode(",<br/>", $error['errorMsg']);   
                echo "<font color= 'red'>$error</font>";
            } elseif ($error['errorFlag'] === false) {
                if ($signup->addUser() === true) {
                    echo "<script>alert('Registered Successfully!');</script>";                    
                    $this->redirect('Contacts', 'list');                                                               
                } else {
                    echo "Not registered";
                }
            }   
        }
        $this->render('Register');      
    }
}
?>
 


