<?php
require_once '../../AddressBook/Config/Config.php';

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
		&nbsp;&nbsp;&nbsp;<a id = "logoutLink" href = "/Login/login">Logout</a>
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
		$do = new Database();
		$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$sql = "SELECT * FROM contacts";
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

