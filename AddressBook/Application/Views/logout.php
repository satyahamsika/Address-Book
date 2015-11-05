<?php
session_unset();  
session_destroy(); 
?>
<!doctype html> 
<html>
    <head>
        <title>Address Book</title>    
        <?php include 'header.php'; ?> 
        <link rel = "stylesheet" type = "text/css" href = "/css/Logout.css"/>
    </head>
    <body background = "/images/backgroundAddressBook.jpg">
    <?php
    if(!$_SESSION['user']) {
        echo "<h1><center>Successfully logged out!<br/></center></h1>";
        echo "<center><a id = 'loginLink' href = '/Login/login'>Click here to login again</a></center><br/>";
    } else {
        echo "Error Occured!!<br />";
    } 
    ?>
    <img src = "/images/download.jpg">
    </body>
</html>