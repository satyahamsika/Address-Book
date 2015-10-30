<?php
require_once '../../AddressBook/Config/Config.php';

?>
<!doctype html>
<html>
	<head>
		<title>Address Book</title>
		<meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
        <meta content = "utf-8" http-equiv = "encoding">
        <link rel = "stylesheet" type = "text/css" href = "/css/listPage.css"/>
	</head>
	<body background = "/images/backgroundAddressBook.jpg">
	<div id = "content">
	<div id = "header">
		<h1>Welcome</h1>
		<button type = "button" id = "logoutbutton" onclick = "location.href = 'login.php';">Logout</button>
		<a href = "/Contacts/add">Add contact</a>
		<!-- <button type = "button" id = "addbutton" onclick = "location.href = 'addContacts.php'">Add Contact</button> -->
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
			<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$do = new Database();
		$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$sql = "SELECT contact_name, contact_phone_no, contact_address FROM contacts";
    	$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row['contact_name'] . "</td>";
			echo "<td>" . $row['contact_address'] . "</td>";
			echo "<td>" . $row['contact_phone_no'] . "</td>";
			echo "<td><a href = '/Contacts/edit'>Edit</a>
					<a href = '/Contacts/delete'>Delete</a></td>";
			echo "</tr>";
		}	
		?>
		</tbody>
	</table>
	</div>
    </body>
</html>

<a href = "/Signup/signup">Register here</a>