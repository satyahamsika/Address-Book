<?php

?>
<!doctype html>
<html>
<head>
	<title>Add Contact</title>
	<meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
    <meta content = "utf-8" http-equiv="encoding">
	<link rel = "stylesheet" type = "text/css" href = "../../Public/css/listPage.css"/>
    <script src = "../../Public/js/addContact.js" type="application/javascript">
    </script>
	<script src = "../../Public/js/common.js" type="application/javascript">
    </script>
    <script src = "../../Public/js/registration.js" type="application/javascript">
    </script> 
</head>
<body>
	<div id = "content">
		<div id = "header">
			<h1>Add Contact&nbsp;<font color = 'red'><?php if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
            echo $error['errorMsg'];            
            }
            ?></font></h1>
		</div>
		<div id = "content">
			<div id="CenterContent">
                <div id="RegisterFormContent">
                <form name = "addcontact" method = "POST" onclick = "addContact.php">
                <p class = "ex">
                    <p>Name<br/>
                        <input type = "text" name = "contact_name" id = "contact_name" onblur = "nameValidation()"><br/>
                    </p>
                    <p>Address<br/>
                        <textarea rows = "4" cols = "50" name = "contact_address" onblur="addressValidation()"></textarea>
                    </p>
                    <p>Mobile No.<br/>                        
                        <input type = "text" name = "contact_phone_no" id = "contact_phone_no" maxlength = "10" onblur = "mobNoValidation()" />
                    </p>    
                    <p>country_name
                    <select name = "country_name" id = "country_name" onchange = "setStates();">
                        <option value = "India">India</option>
                        <option value = "Mexico">Mexico</option>
                    </select>
                    </p>  
                    <p>State
                    <select name = "state_name" id = "state_name" onchange = "setCities();">
                        <option value = "">Please select a Country</option>
                    </select>
                    </p>
                    <p>City
                    <select name = "city_name"  id = "city_name">
                        <option value = "">Please select a Country</option>
                    </select>
                    </p>                                                    
                    <p>
                        <button type = "Submit"  value = "Submit" name = "submit" onclick = "addContact.php">Submit</button>
                        <button type = "Reset" name = "reset" value = "Reset">Reset</button>
                    </p>
                </p>   
            </form>
        </div>
        </div>
		<div>
	</div>
</body>
</html>