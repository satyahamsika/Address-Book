<?php
require_once '../../AddressBook/Config/Config.php';

class ContactsController extends BaseController
{
    public function listAction()
    {
        $this->render(APPHOME . DS . 'Views' . DS . 'listPage.php');
    }
	public function addAction()
	{
        $this->render(APPHOME . DS . 'Views' . DS . 'addContact.php');
        if (isset($_POST['submit'])) { 
            $addressbook = new AddressBook($_POST);
            $error = $addressbook->validate();              
            if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
                $error = implode(",<br/>",$error['errorMsg']);   
                echo $error;
            } elseif ($error['errorFlag'] === false) {
                if ($addressbook->addAddress() === true) {
                    $this->redirect('Contacts', 'list');             
                } 
            }
        }
    }
    // public function editAction()
    // {

    // }
    // public function deleteAction()
    // {

    // }

    
}
?>
 