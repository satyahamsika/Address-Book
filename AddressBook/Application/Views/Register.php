<?php 
require_once "../../Config/Config.php";
require_once "/var/www/hamsika.com/public_html/html/AddressBook/Application/Controllers/Signup.php";

if (isset($_POST['submit'])) {       
    $signup = new Signup($_POST);
    $error =  $signup->validate();
    if ($error['errorFlag'] === false) {
        if ($signup->addUser() === true) {
            header('Location: http://www.google.com/');         
        }
    }    
}
?>
<!doctype html>
<html>
    <head>
        <title>Register</title>
        <meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
        <meta content = "utf-8" http-equiv="encoding">
        <link rel = "stylesheet" type = "text/css" href = "../../Public/css/Signup.css"/>
        <script src = "../../Public/js/common.js" type="application/javascript">
        </script>
        <script src = "../../Public/js/registration.js" type="application/javascript">
        </script> 
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
            <div id="CenterContent">
                <div id="RegisterFormContent">
                <form name = "registration" action = "Register.php" method = "POST">
                <p class = "ex">
                    <p>Name<span>*</span><br/>
                        <input type = "text" name = "name" id = "pname" onblur = "nameValidation()"><br/>
                    </p>
                    <p>Username/E-mail id<span>*</span><br/>
                        <input type = "text" name = "emailid" id = "uname" onblur = "userNameValidation()">
                        <br/>
                    </p>
                    <p>Password<span>*</span><br/>    
                        <input type = "password" name = "password" id = "password" onblur = "passwordValidation()"><br/>
                    </p>
                    <p>Confirm Password<span>*</span><br/>
                        <input type = "password" name = "cpassword" id = "cpassword" onblur = "confirmPasswordValidation()">
                    </p>                    
                    <p>Gender<span>*</span><br/>
                        <input type = "radio" name = "gender" value = "male">Male
                        <input type = "radio" name = "gender" value = "female" onblur = "genValidation()">Female
                    </p>
                    <p>Mobile No.<span>*</span><br/>                        
                        <input type = "text" name = "mobno" id = "mobileno" maxlength = "10" onblur = "mobNoValidation()" />
                    </p>                    
                    <p>
                        <button type = "Submit"  value = "Submit" name = "submit">Submit</button>		
                        <button type = "Reset" name = "reset" value = "Reset">Reset</button>
                    </p>
                    <p><b>Note:</b>&nbsp;<span>*</span> Indicates required fields.
                    </p>
                </p>   
            </form>
        </div>
        </div>
        </div>
    </body>
</html>

