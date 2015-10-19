<?php
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Config/Config.php';
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/AddressBook.php';
require_once '/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/Database.php';

?>
<!doctype html>
<html>
	<head>
		<title>List Contacts</title>
	</head>
	<body>
	<?php 
	$do = new Database();
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $sql = "SELECT * FROM contacts";
	$result=mysqli_query($db,$sql);
	echo "<table border = '1'>
	<tr>
	<th>Name</th>
	<th>Address</th>
	<th>Phone No</th>
	</tr>";
	while($row = mysqli_fetch_assoc($result))
	{
	echo "<tr>";
	echo "<td>" . $row['contact_name'] . "</td>";
	echo "<td>" . $row['contact_address'] . "</td>";
	echo "<td>" . $row['contact_phone_no'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
	?>
	</body>
</html>


