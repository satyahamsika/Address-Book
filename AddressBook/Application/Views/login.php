<?php 
require_once "../../Config/Config.php";
require_once "../Controllers/Login.php";

if (isset($_POST['submit'])) {   
	$login = new Login($_POST);
    $error =  $login->validate();
    if ($login->checkUser() === true) {  
       	header('Location: http://www.google.com/');
           
    }
}   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel = "stylesheet" type = "text/css" media = "all" href = "../../Public/css/Signup.css"/>
	<script src = "../../Public/js/login.js" type="application/javascript">
    </script>
</head>
<body>
	<header>
		<h1>Address Book</h1>
	</header>
	<div id="Content">
		<div id="LeftColumn">
			<img src = "../../Public/images/download.jpg">
		</div>
		<div id="RightColumn">
			<div id="LoginFormContent">
			<h2>Login</h2>
			<form name = "login" id = "loginform "method = "POST">
				Username: <input type = 'text' name = 'emailid' id = 'username' onblur = "userNameValidation()"/>
				<br/>
				<br/>
				Password: <input type = 'password' name = 'password' ids = 'password' onblur = "passwordValidation()"/>
				<br/>
				<br/>
				<input type = "submit"  value = "Submit" name = "submit"/>	&nbsp;	
		        <input type = "reset" name = "reset" value = "Reset"/>
		    </form>
			<br/><br/>
			<button type="button" id="RegisterButton" onclick="location.href='../Views/Register.php';">Register here</button>
			</div>
		</div>
	</div>
</body>
</html>
