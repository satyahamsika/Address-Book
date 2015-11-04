<?php
require_once '../../AddressBook/Config/Config.php';

class ContactsController extends BaseController
{
    public function listAction()
    {
        $this->render('listPage');
    }
	public function addAction()
	{

        $this->render('addContact');
        if (isset($_POST['submit'])) { 
            $addressbook = new AddressBook($_POST);
            $error = $addressbook->validate();              
            if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
                $error = implode(",<br/>", $error['errorMsg']);   
        } elseif ($error['errorFlag'] === false) {
                $where = $_SESSION["user"];
                if ($addressbook->addAddress($where) === true) {  
                    echo "<script>alert('Contact added Successfully!');</script>";
                    $this->redirect('Contacts', 'list');             
                } 
            }
        }
    }    
    public function updateAction()
    {
        $this->render('editContact');
             
        if(isset($_POST['submit'])) {
            $addressbook = new AddressBook($_POST);
            $result = $addressbook->editAddress();
            if ($result === TRUE) {
                echo "<script>alert('Successfully updated!');</script>";
                $this->redirect('Contacts', 'list');
            } 
        }
    }
    public function deleteAction()
    {
        $addressbook = new AddressBook($_POST);
        $result = $addressbook->deleteAddress();
        if($result === true) {
            echo "Deleted sucessfully";
            $this->redirect('Contacts', 'list');
        } else {
            echo "Cannot be deleted";
        }
              
        return $result;
    }
}
?>
 

 
        