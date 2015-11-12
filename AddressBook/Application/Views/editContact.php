<?php
require_once '../../AddressBook/Config/Config.php';

$id = $_GET['id'];
$where = "contact_id = " . $id;
$query = "SELECT * FROM contacts WHERE $where";
$this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$result = mysqli_query($this->db, $query);
while ($row = mysqli_fetch_array($result)) {
?>
<!doctype html>
<html>
    <head>
        <title>Edit Contact</title>
        <?php include 'header.php'; ?>
        <link rel = "stylesheet" type = "text/css" href = "/css/Signup.css"/>
    </head>
    <body background = "/images/backgroundAddressBook.jpg">
        <div id = "content">
            <div id = "header">
                <h1>Edit Contact&nbsp;<a id = "goback" href = '/Contacts/list'>Back</a></h1>
            </div>
            <div id = "content">
                <div id = "CenterContent">
                    <div id = "RegisterFormContent">
                        <form name = "addcontact" method = "POST" onsubmit = "return(validateContacts())">
                            <input type = "hidden" name = "id" value = "<?php echo "{$row['contact_id']}"; ?>"/>
                            Name:<br/>
                            <input type = "text" name = "contact_name" id = "contact_name" value = <?php echo "{$row['contact_name']}";?>><span id = "contact_nameError"></span><br/>
                            Address:<br/>
                            <textarea rows = "4" cols = "30" name = "contact_address" id = "contact_address"><?php echo "{$row['contact_address']}";?></textarea><span id = "contact_addressError"></span><br/>
                            Mobile No.:<br/>                        
                            <input type = "text" name = "contact_phone_no" id = "contact_phone_no" maxlength = "10" value = <?php echo "{$row['contact_phone_no']}";?>><span id = "contact_phone_noError"></span><br/>
                            Country:<br/>
                            <select name = "country_name" id = "country_name" onchange = "setStates();" style = "width: 235px;">
                                <option value = "India">India</option>
                                <option value = "Mexico">Mexico</option>
                            </select><br/>        
                            State:<br/>
                            <select name = "state_name" id = "state_name" onchange = "setCities();" style = "width: 235px;">
                                <option value = "">Please select a Country</option>
                            </select><br/>
                            City:<br/>
                            <select name = "city_name"  id = "city_name" style = "width: 235px;">
                                <option value = "">Please select a Country</option>
                            </select><br/><br/>
                            <input type = "Submit"  value = "Update" name = "submit">
                            <input type = "Reset" name = "Reset" value = "Reset">
                            <input type = 'button' class = "button" value = 'Back' onclick = "document.location.href='/Contacts/list';"/>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>
<?php
}
?>