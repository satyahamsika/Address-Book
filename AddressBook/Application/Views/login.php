<?php 
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Config/Config.php';
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/Login.php';

 if (isset($_POST['submit'])) {
			$login = new Login($_POST);
			$login->emailId = $_POST['emailid'];
			$login->password = $_POST['password'];
			$error = $login->validate();
			if ((isset($error['errorFlag']) && $error['errorFlag']) === true) {
            echo $error['errorMsg'];            
        	}
			if ($error['errorFlag'] === false) {
				if ($login->checkUser() === true) {
					header('Location: ../Views/listPage.html');
				} else {
					echo "Invalid user";
				}
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel = "stylesheet" type = "text/css" media = "all" href = "../Public/css/Signup.css"/>
	<script src = "../../Public/js/login.js" type="application/javascript">
    </script>
</head>
<body>
	<header>
		<h1>Address Book</h1>
	</header>
	<div id="Content">
		<div id="LeftColumn">
			<img src = "../Public/images/download.jpg">
		</div>
		<div id="RightColumn">
			<div id="LoginFormContent">
			<h2>Login</h2>
			<form name = "login" id = "loginform" method = "POST" onclick = "login.php">
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
			<button type = "button" id = "RegisterButton" onclick = "location.href='../Application/Views/Register.php';">Register here</button>
			</div>
		</div>
	</div>
</body>
</html>
