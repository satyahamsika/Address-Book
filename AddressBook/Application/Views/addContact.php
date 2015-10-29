<!doctype html>
<html>
<head>
	<title>Add Contact</title>
	<meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
    <meta content = "utf-8" http-equiv="encoding">
	<link rel = "stylesheet" type = "text/css" href = "/css/listPage.css"/>
    <script src = "/js/addContact.js" type="application/javascript">
    </script>
	<script src = "/js/common.js" type="application/javascript">
    </script>
    <script src = "/js/registration.js" type="application/javascript">
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
                    <form name = "addcontact" method = "POST" onsubmit = "return(validateContacts())">
                        Name:<br/>
                        <input type = "text" name = "contact_name" id = "contact_name"><span id = "contact_nameError"></span><br/>
                        Address:<br/>
                        <textarea rows = "4" cols = "40" name = "contact_address" id = "contact_address"></textarea><span id = "contact_addressError"></span><br/>
                        Mobile No.:<br/>                        
                        <input type = "text" name = "contact_phone_no" id = "contact_phone_no" maxlength = "10"/><span id = "contact_phone_noError"></span><br/>
                        Country:<br/>
                        <select name = "country_name" id = "country_name" onchange = "setStates();">
                            <option value = "India">India</option>
                            <option value = "Mexico">Mexico</option>
                        </select><br/>        
                        State:<br/>
                        <select name = "state_name" id = "state_name" onchange = "setCities();">
                            <option value = "">Please select a Country</option>
                        </select><br/>
                        City:<br/>
                        <select name = "city_name"  id = "city_name">
                            <option value = "">Please select a Country</option>
                        </select><br/><br/>
                        <input type = "Submit"  value = "Submit" name = "submit">
                        <input type = "Reset" name = "Reset" value = "Reset">
                    </form>
                </div>
            </div>
		<div>
	</div>
</body>
</html>


