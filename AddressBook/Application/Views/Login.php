<?php 
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Config/Config.php';
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Controllers/LoginController.php';

?>
<!DOCTYPE html>
<html>
	<title>Login</title>
	<?php include 'header.php'; ?>
<body>
	<header>
		<h1>Address Book</h1>
	</header>
	<div id = "Content">
		<div id = "LeftColumn">
			<img src = "../../Public/images/download.jpg">
		</div>
		<div id = "RightColumn">
			<div id = "LoginFormContent">
			<h2>Login</h2>
			<form name = "login" id = "loginform" method = "POST" onclick = "">
				Username: <input type = 'text' name = 'emailid' id = 'username' onblur = "userNameValidation()"/>
				<br/>
				<br/>
				Password: <input type = 'password' name = 'password' ids = 'password' onblur = "passwordValidation()"/>
				<br/>
				<br/>
				<input type = "submit"  value = "submit" name = "submit"/>	&nbsp;	
		        <input type = "reset" name = "reset" value = "Reset"/>
		    </form>
			<br/><br/>
			<button type = "button" id = "RegisterButton" onclick = "location.href = '../Application/Views/Register.php';">Register here</button>
			</div>
		</div>
	</div>
</body>
</html>
