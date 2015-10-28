<!doctype html>
<html>
    <head>
        <title>Register</title>
        <link rel = "stylesheet" type = "text/css" href = "/css/Signup.css"/>
        <script src = "/js/registration.js" type = "text/javascript">
        </script>
        <?php include('header.php'); ?>
    </head>
    <body>        
        <br/>
        <header>
            <h1>Register</h1>
        </header>
        <font color = "red"><?php if (isset($error['errorFlag']) && $error['errorFlag'] === true) {
            echo $error['errorMsg'];            
        } 
        ?></font>
        <div id = "content">
            <div id = "CenterContent">
                <div id = "RegisterFormContent">
                    <form name = "registration" id = "registrationForm" method = "POST" onsubmit = "return(validateRegistration())">
                        Name:<br/>
                        <input type = "text" name = "name" id = "pname" maxlength = "15"><span id = "nameError"></span><br/><br/>
                        E-mail id:<br/>
                        <input type = "email" name = "emailid" id = "uname"><span id = "usernameError"></span><br/><br/>
                        Password:<br/>    
                        <input type = "password" name = "password" id = "password" maxlength = "15"><span id = "passwordError"></span><br/><br/>
                        Confirm Password:<br/>
                        <input type = "password" name = "cpassword" id = "cpassword" maxlength = "15"><span id = "cpasswordError"></span><br/><br/>
                        Gender:<br/>
                        <input type = "radio" name = "gender" id = "genderM" value = "male">Male
                        <input type = "radio" name = "gender" id = "genderF" value = "female">Female<span id = "genderError"></span><br/><br/>
                        Mobile No.:<br/>                        
                        <input type = "text" name = "mobno" id = "mobileno" maxlength = "10"/><span id = "mobNoError"></span><br/><br/>   
                        <input type = "Submit"  value = "Submit" name = "submit"/>		
                        <input type = "Reset" name = "reset" value = "Reset"/><br/>
                        <p>Note: All fields are mandatory</p>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

