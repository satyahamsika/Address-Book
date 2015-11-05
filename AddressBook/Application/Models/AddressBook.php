<?php
class AddressBook extends Signup
{
    public $contact_name = "";
    public $contact_address = "";
    public $contact_phone_no  = "";
    public $country_name = "";
    public $state_name = "";
    public $city_name = "";
    public $db = "";
    public function __construct($params) 
    {
        if (is_array($params)) {
            $this->contact_name = $params['contact_name'];
            $this->contact_address = $params['contact_address'];
            $this->contact_phone_no = $params['contact_phone_no'];
            $this->country_name = $params['country_name'];
            $this->state_name = $params['state_name'];
            $this->city_name = $params['city_name'];
            $this->db = new Database();
        }
    }
    /**
    * Validating the entered details 
    */
    public function validate() 
    {
        $error = array('errorFlag' => false, 'errorMsg' => array());
        if (empty($this->contact_name)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "Name cannot be null");
        } elseif (!ctype_alpha($this->contact_name)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "Name must be alphabets");
        }   
        if (empty($this->contact_address)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "Address cannot be null");
        }
        if (empty($this->contact_phone_no)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "Mobile no cannot be null");
        } elseif (!ctype_digit($this->contact_phone_no)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "Mobile no must be numeric");   
        } 
        if (empty($this->country_name)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "Country cannot be null");
        } 
        if (empty($this->state_name)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "State cannot be null");
        }
        if (empty($this->city_name)) {
            $error['errorFlag'] = true;
            array_push($error['errorMsg'], "City cannot be null");
        }
        
        return $error;
    }
    /**
    * Add new contacts
    */
    public function addAddress($user_id)
    {
        $this->db = new Database();
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql = "SELECT user_id from users where email_id = '".$user_id."'";
        $userid = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_row($userid);
        $add['contact_name'] = $this->contact_name;
        $add['contact_phone_no '] = $this->contact_phone_no;
        $add['contact_address'] = $this->contact_address;
        $add['user_id'] = $row[0];
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->db = new Database();
        $result = $this->db->insert('contacts', $add);
                
        return $result;
    }
    /**
    * List the contacts
    */
    public function listAddress($user_id)
    {    
        $this->db = new Database();
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql = "SELECT user_id from users where email_id = '".$user_id."'";
        $userid = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_row($userid);   
        $add['contact_name'] = $this->contact_name;
        $add['contact_phone_no '] = $this->contact_phone_no;
        $add['contact_address'] = $this->contact_address;
        $where = $row[0];
        $result = $this->db->select('contacts', $add, $where);
        
        return $result;
    }  
    /**
    * Edit the added contact
    */   
    public function editAddress()
    {
        $this->update = array ('contact_name' => $_POST['contact_name'],'contact_address' => $_POST['contact_address'],
            'contact_phone_no' => $_POST['contact_phone_no']);
        $id = $_GET['id'];
        $result = $this->db->update('contacts', $this->update, 'contact_id = ' . $id);

         return $result;
    }
    /**
    * Delete the contact
    */
    public function deleteAddress()
    {
        $id = $_GET['id'];
        return $this->db->delete('contacts', 'contact_id = ' . $id);
    }
}
?>



