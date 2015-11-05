<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title>Add Contact</title>	
    <?php require_once 'header.php'; ?>
    <link rel = "stylesheet" type = "text/css" href = "/css/Signup.css"/>

	</head>
<body background = "/images/backgroundAddressBook.jpg">
	<div id = "content">
		<div id = "header">
			<h1>Add Contact&nbsp;<?php if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
            echo $error['errorMsg'];            
            }
            ?>&nbsp;<a id = "goback" href = '/Contacts/list'>Back</a></h1>
		</div>
		<div id = "content">
			<div id="CenterContent">
                <div id="RegisterFormContent">
                    <form name = "addcontact" method = "POST" onsubmit = "return(validateContacts())">
                        Name:<br/>
                        <input type = "text" name = "contact_name" id = "contact_name"><span id = "contact_nameError"></span><br/>
                        Address:<br/>
                        <textarea rows = "4" cols = "34" name = "contact_address" id = "contact_address"></textarea><span id = "contact_addressError"></span><br/>
                        Mobile No.:<br/>                        
                        <input type = "text" name = "contact_phone_no" id = "contact_phone_no" maxlength = "10"/><span id = "contact_phone_noError"></span><br/>
                        Country:<br/>
                        <select name = "country_name" id = "country_name" onchange = "setStates();" style = "width: 255px;">
                            <option value = "India">India</option>
                            <option value = "Mexico">Mexico</option>
                        </select><br/>        
                        State:<br/>
                        <select name = "state_name" id = "state_name" onchange = "setCities();" style = "width: 255px;">
                            <option value = "">Please select a Country</option>
                        </select><br/>
                        City:<br/>
                        <select name = "city_name"  id = "city_name" style = "width: 255px;">
                            <option value = "">Please select a Country</option>
                        </select><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type = "Submit"  class = "submit "value = "Add" name = "submit">
                        <input type = "Reset" class = "reset" name = "Reset" value = "Reset">
                        <input type = 'button' class = "button" value = 'Back' onclick = "document.location.href='/Contacts/list';"/>
                    </form>
                </div>
            </div>
		<div>
	</div>
</body>
</html>

