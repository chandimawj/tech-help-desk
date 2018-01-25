<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<h3>All Users</h3>
<?php
require_once '../dbconnect/db_connect.php';

$sql="SELECT * FROM user_info";
$result=mysql_query($sql,$con);

echo "<table class='simple'>";
echo "<tr>";
echo "<th>User ID</th> 
	<th>Name</th>
	<th>Password</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>";
echo "</tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>";
	echo   "<td>".$row["user_id"]."</td> 
			<td>".$row["user_name"]."</td>
			<td>".$row["user_password"]."</td>
			<td>".$row["user_email"]."</td>
			<td>".$row["user_phone"]."</td>
			<td>".$row["user_address"]."</td>
			<td><a href=/techhelpdesk/user/edit_user.php?id=".$row["user_id"]." target='main'>EDIT</a></td>
			<td><a href=/techhelpdesk/delete_account.php?id=".$row["user_id"]."&type=user>DELETE</a></td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);

?>
</body>

</html>
