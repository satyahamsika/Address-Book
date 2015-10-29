<?php
require_once '../../AddressBook/Config/Config.php';

class ContactsController extends BaseController
{
	public function addAction()
	{
        if (isset($_POST['submit'])) { 
            $addressbook = new AddressBook($_POST);
            // $addressbook->contact_name = $_POST['contact_name']; 
            // $addressbook->contact_address = $_POST['contact_address']; 
            // $addressbook->contact_phone_no = $_POST['contact_phone_no']; 
            // $addressbook->country_name = $_POST['country_name'];
            // $addressbook->state_name = $_POST['state_name'];
            // $addressbook->city_name = $_POST['city_name'];            
            $error =  $addressbook->validate();
            $error = $addressbook->addAddress();
            $error = $addressbook->listAddress();
            if ($error['errorFlag'] === false) {
                if ($addressbook->addAddress() === true) {
                    header('Location: ../Views/listPage.php');         
                } 
            }
}
    }
    public function editAction()
    {

    }
    public function deleteAction()
    {
        
    }

}
?>
 