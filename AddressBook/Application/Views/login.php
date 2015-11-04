<?php 
require_once '../../AddressBook/Config/Config.php';
session_start();
$_SESSION['user'] = $_POST['emailid'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel = "stylesheet" type = "text/css" href = "/css/Login.css"/>
		<?php include('header.php'); ?>
    </head>
	<body background = "/images/backgroundAddressBook.jpg">
		<header>
			<h1>Address Book</h1>
			&nbsp;&nbsp;<h3>All your contacts in one place!!!</h3>
		</header>
		<div id = "Content">
			<div id = "LeftColumn">
				<img src = "/images/download.jpg">
			</div>
			<div id = "RightColumn">
				<div id = "LoginFormContent">
				<h2>Login</h2>
				<form name = "login" id = "loginform" method = "POST" onsubmit = "return(validate())">
					E-mail id: <input type = 'email' name = 'emailid' id = 'username'/><span id = "usernameError"></span>
					<br/>
					<br/>					
					Password: <input type = 'password' name = 'password' id = 'password' maxlength = "15" /><span id = "passwordError"></span>
					<br/>
					<br/>					
					<center><input type = "submit"  value = "Submit" name = "submit"/>&nbsp;	
			        <input type = "reset" name = "reset" value = "Reset"/><br/><br/>
			        <a href = "/Signup/signup">Register here</a>
			    </form>			     
			 	<br/><br/>
				</div>
			</div>
		</div>	
<?php 
	include 'footer.php'; 
?>


