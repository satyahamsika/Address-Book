<?php
require_once '../../AddressBook/Config/Config.php';

class ContactsController extends BaseController
{
    /**
    * List the added address
    */
    public function listAction()
    {
        $this->render('listPage');
    }
    /**
    * Adds new address
    */
    public function addAction()
    {
        $this->render('addContact');
        if (isset($_POST['submit'])) { 
            $addressbook = new AddressBook($_POST);
            $error = $addressbook->validate();              
            if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
                $error = implode(",<br/>", $error['errorMsg']);  
                echo $error; 
            } elseif ($error['errorFlag'] === false) {
                $where = $_SESSION["user"];
                if ($addressbook->addAddress($where) === true) {  
                    echo "<script>alert('Contact added Successfully!');</script>";
                    $this->redirect('Contacts', 'list');             
                } 
            }
        }
    }    
    /**
    * Updates the address
    */
    public function updateAction()
    {
        $this->render('editContact');             
        if (isset($_POST['submit'])) {
            $addressbook = new AddressBook($_POST);
            $error = $addressbook->validate();  
            $result = $addressbook->editAddress();
            if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
                $error = implode(",<br/>", $error['errorMsg']);   
            } elseif ($error['errorFlag'] === false) {
                if ($result === true) {
                    echo "<script>alert('Successfully updated!');</script>";
                    $this->redirect('Contacts', 'list');
                } 
            }
        }
    }
    /**
    * Delete the selected address
    */
    public function deleteAction()
    {
        $addressbook = new AddressBook($_POST);
        $result = $addressbook->deleteAddress();
        $this->redirect('Contacts', 'list');

        return $result;
    }
}
?>
 

 
        