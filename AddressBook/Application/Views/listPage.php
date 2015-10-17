<!doctype html>
<html>
	<head>
		<title>Address Book</title>
		<meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
        <meta content = "utf-8" http-equiv="encoding">
        <link rel = "stylesheet" type = "text/css" href = "../../Public/css/listPage.css"/>
	</head>
	<body>
	<div id = content>
	<div id = "header">
		<h1>Welcome</h1>
		<button type = "button" id = "logoutbutton" onclick = "location.href = 'login.php';">Logout</button>
	</div>
	<br/>
	<div id = "section">
		<button type = "button" id = "addbutton" onclick = "location.href = 'addContact.php';">Add Contact</button>
		<button type = "button" id = "listbutton" onclick = "location.href = 'listContacts.php';">List Contact</button>
	</div>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<div class = "table">
	<table border = "2" style = "width :100%"> 
		<thead><tr>
			<th>Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td><center><button type="button" id="editbutton" onclick="location.href='../Views/Register.php';">Edit Contact</button>
			<button type="button" id="deletebutton" onclick="location.href='../Views/Register.php';">Delete Contact</button></center></td></tr></tbody>
	</table>
	</div>
    </body>
</html>