<?php
require_once "/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/AddressBook.php";
require_once "/var/www/hamsika.com/public_html/html/AddressBook/Application/Models/Database.php";

$addressbook = new AddressBook();
$error = $addressbook->addAddress();
$error = $addressbook->listAddress();

?>
<!doctype html>
<html>
	<head>
		<title>List Contacts</title>
	</head>
	<body>
	<?php 
	$add['contact_name'] = $this->contact_name;
	$add['contact_phone_no '] = $this->contact_phone_no;
	$addd['contact_address'] = $this->contact_address;
	$do = new Database();
    $result = $do->select('contacts', $add, 'address', $addd);    
	echo $this->contact_name;
	echo "<table border='1'>
	<tr>
	<th>Name</th>
	<th>Address</th>
	<th>Phone No</th>
	</tr>";
	while($row = mysqli_fetch_row($result))
	{
	echo "<tr>";
	echo "<td>" . $row['$this->contact_name'] . "</td>";
	echo "<td>" . $row['$this->contact_address'] . "</td>";
	echo "<td>" . $row['$this->contact_phone_no'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
	?>
	</body>
</html>


