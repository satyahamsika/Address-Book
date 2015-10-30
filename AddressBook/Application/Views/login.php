<?php 
require_once '../../AddressBook/Config/Config.php';

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Login</title>
	<link rel = "stylesheet" type = "text/css" href = "/css/Login.css"/>
	<?php include('header.php'); ?>
    </head>
	<body>
		<header>
			<h1>Login</h1>
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
			        <!-- <input type = "button" name = "register" value = "Register Here" onclick = "document.write('<?php echo $this->redirect('Signup', 'signup'); ?>');" /></center> --> 
			    </form>
			     
			 	<br/><br/>
				</div>
			</div>
		</div>	
	</body>
</html>
