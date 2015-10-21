<?php 
require_once '../../AddressBook/Config/Config.php';

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Login</title>
	<?php include('header.php'); ?>
    </head>
<body>
	<header>
		<h1>Address Book</h1>
	</header>
	<div id = "Content">
		<div id = "LeftColumn">
			<img src = "/images/download.jpg">
		</div>
		<div id = "RightColumn">
			<div id = "LoginFormContent">
			<h2>Login</h2>
			<form name = "login" id = "loginform" method = "POST">
				Username: <input type = 'text' name = 'emailid' id = 'username' onblur = "userNameValidation()"/>
				<br/>
				<br/>
				Password: <input type = 'password' name = 'password' id = 'password' onblur = "passwordValidation()"/>
				<br/>
				<br/>
				<input type = "submit"  value = "submit" name = "submit"/>	&nbsp;	
		        <input type = "reset" name = "reset" value = "Reset"/>
		    </form>
			<br/><br/>
			</div>
		</div>
	</div>	
</body>
</html>
