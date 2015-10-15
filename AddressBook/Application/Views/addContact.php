<?php
?><!doctype html>
<html>
<head>
	<title>Add Contact</title>
	<meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
    <meta content = "utf-8" http-equiv="encoding">
	<link rel = "stylesheet" type = "text/css" href = "../../Public/css/listPage.css"/>
	<script src = "../../Public/js/common.js" type="application/javascript">
    </script>
    <script src = "../../Public/js/registration.js" type="application/javascript">
    </script> 
</head>
<body>
	<div id = "content">
		<div id = "header">
			<h1>Add Contact</h1>
		</div>
		<div id = "content">
			<div id="CenterContent">
                <div id="RegisterFormContent">
                <form name = "addcontact" method = "POST">
                <p class = "ex">
                    <p>Name<span>*</span><br/>
                        <input type = "text" name = "name" id = "pname" onblur = "nameValidation()"><br/>
                    </p>
                    <p>Address<br/>
                        <textarea rows = "4" cols = "50" name = "address"></textarea>
                    </p>
                    <p>Mobile No.<span>*</span><br/>                        
                        <input type = "text" name = "mobno" id = "mobileno" maxlength = "10" onblur = "mobNoValidation()" />
                    </p>    
                    <p>Country
                    <select id = "country" name = "country" onblur = "countryValidation()">
                            <option value = "0" selected >Select Country</option>
                    </select>
                    </p>  
                    <p>State
                    <select id = "state" name = "state" onblur = "stateValidation()">
                            <option value = "0" selected >Select Country</option>
                    </select>
                    </p>
                    <p>City
                    <select id = "city" name = "city" onblur = "cityValidation()">
                            <option value = "0" selected >Select Country</option>
                    </select>
                    </p>                                                    
                    <p>
                        <button type = "Submit"  value = "Submit" name = "submit" onclick = "addContact.php">Submit</button>
                        <button type = "Reset" name = "reset" value = "Reset">Reset</button>
                    </p>
                    <p><b>Note:</b>&nbsp;<span>*</span> Indicates required fields.
                    </p>
                </p>   
            </form>
        </div>
        </div>
		<div>
	</div>
</body>
</html>