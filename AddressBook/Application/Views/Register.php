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
            <h1>Register</h1>
        </div>
        <font color = "red">
            <?php 
                if (isset($error['errorFlag']) && $error['errorFlag'] === true) {
                    echo $error['errorMsg'];            
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
                        <input type = "password" name = "cpassword" id = "cpassword" maxlength = "15"><span id = "cpasswordError"></span><br/><br/>
                        Gender:<br/>
                        <input type = "radio" name = "gender" id = "genderM" value = "male">Male
                        <input type = "radio" name = "gender" id = "genderF" value = "female">Female<span id = "genderError"></span><br/><br/>
                        Mobile No.:<br/>                        
                        <input type = "text" name = "mobileno" id = "mobileno" maxlength = "10"/><span id = "mobNoError"></span><br/><br/>   
                        <input type = "Submit"  value = "Submit" name = "submit"/>      
                        <input type = "Reset" name = "reset" value = "Reset"/><br/>
                        <p>Note: All fields are mandatory</p>
                    </form>
                </div>
            </div>
        </div>
<?php 
    include 'footer.php'; 
?>

