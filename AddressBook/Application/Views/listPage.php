<?php
require_once '../../AddressBook/Config/Config.php';
session_start();
$user_id = $_SESSION["user"];
?>
<!doctype html>
<html>
    <head>
        <title>Address Book</title>    
        <?php include 'header.php'; ?> 
        <link rel = "stylesheet" type = "text/css" href = "/css/listPage.css"/>
    </head>
    <body background = "/images/backgroundAddressBook.jpg">
    <div id = "content">
    <div id = "header">
        <h1>Welcome to Address Book</h1>
        <a id = "addLink" href = "/Contacts/add">Add contact</a>&nbsp; &nbsp;<br/>
        &nbsp;&nbsp;&nbsp;<a id = "logoutLink" href = "/Login/logout">Logout</a>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class = "table">
    <table border = "" style = "width :100%"> 
        <thead><tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th colspan = "2">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $this->db = new Database();
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql = "SELECT user_id from users where email_id = '".$user_id."'";
        $userid = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_row($userid);   
        $where = $row[0];
        $do = new Database();
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sql = "SELECT * FROM contacts where user_id = $where";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['contact_name'] . "</td>";
            echo "<td>" . $row['contact_address'] . "</td>";
            echo "<td>" . $row['contact_phone_no'] . "</td>";
            echo "<td><a href = '/Contacts/update?id=" . $row['contact_id']."'>Edit</a></td>";
            echo "<td><a onclick = \"javascript: return confirm('Please confirm deletion');\" href = '/Contacts/delete?id=" . $row['contact_id']."'>Delete</a></td>";
            echo "</tr>";
        }   
        ?>
        </tbody>
    </table>
    </div>
<?php 
    include 'footer.php'; 
?>

