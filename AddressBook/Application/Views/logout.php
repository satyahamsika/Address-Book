<?php
session_unset();  
session_destroy();  
if(!$_SESSION['user']) {
    echo "Successfully logged out!<br />";
    echo "<a id = 'loginLink' href = '/Login/login'>Click here to login again</a>";
} else {
    echo "Error Occured!!<br />";
} 
?>