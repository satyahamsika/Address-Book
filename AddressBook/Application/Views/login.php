<?php 
require_once '../../AddressBook/Config/Config.php';

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Login</title>
	<meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
    <meta content = "utf-8" http-equiv = "encoding">
	<link rel = "stylesheet" type = "text/css" media = "all" href = "../../Public/css/Signup.css"/>
	<script src = "../../Public/js/common.js" type = "application/javascript">
    </script>
    <script src = "../../Public/js/registration.js" type = "application/javascript">
    </script> 
	<script src = "../../Public/js/login.js" type = "application/javascript">
    </script>
    </head>
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
