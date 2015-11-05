<?php 
require_once '../../AddressBook/Config/Config.php';
session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Register</title>
        <?php include('header.php'); ?>
        <link rel = "stylesheet" type = "text/css" href = "/css/Register.css"/>
    </head>
    <body background = "/images/backgroundAddressBook.jpg">        
        <br/>
        <div id = "header">
            <h1>Register&nbsp;<a id = "loginlink" href = '/Login/login'>Login</a></h1>
        </div>
        <font color = "red">
            <?php 
                if (isset($error['errorFlag']) && $error['errorFlag'] === true) {
                    $error = implode(",<br/>" , $error['errorMsg']); 
                    echo $error;          
                } 
            ?> 
        </font>
        <div id = "content">
            <div id = "CenterContent">
                <div id = "RegisterFormContent">
                    <form name = "registration" id = "registrationForm" method = "POST" onsubmit = "return(validateRegistration())">
                        Name:<br/>
                        <input type = "text" name = "pname" id = "pname" maxlength = "15"><span id = "nameError"></span><br/><br/>
                        E-mail id:<br/>
                        <input type = "email" name = "uname" id = "uname"><span id = "usernameError"></span><br/><br/>
                        Password:<br/>    
                        <input type = "password" name = "password" id = "password" maxlength = "15"><span id = "passwordError"></span><br/><br/>
                        Confirm Password:<br/>
                        <input type = "password" name = "cpassword" id = "cpassword" maxlength = "15"><span id = "cpasswordError"></span><span id = "mismatchError"></span><br/><br/>
                        Gender:<br/>
                        <input type = "radio" name = "gender" id = "genderM" value = "male">Male
                        <input type = "radio" name = "gender" id = "genderF" value = "female">Female<span id = "genderError"></span><br/><br/>
                        Mobile No.:<br/>                        
                        <input type = "text" name = "mobileno" id = "mobileno" maxlength = "10"/><span id = "mobNoError"></span><br/><br/>   
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class = "submit" type = "Submit"  value = "Register" name = "submit"/>      
                        <input class = "reset" type = "Reset" name = "reset" value = "Reset"/><br/>
                    </form>
                </div>
            </div>
        </div>
<?php 
    include 'footer.php'; 
?>

