<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<h3>All Technicians</h3>
<?php
require_once '../dbconnect/db_connect.php';

$sql="SELECT * FROM tech_info";
$result=mysql_query($sql,$con);

echo "<table class='simple'>";
echo "<tr>";
echo "<th>Technician ID</th> 
	<th>Name</th>
	<th>Password</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Field</th>";
echo "</tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>";
	echo   "<td>".$row["tech_id"]."</td> 
			<td>".$row["tech_name"]."</td>
			<td>".$row["tech_password"]."</td>
			<td>".$row["tech_email"]."</td>
			<td>".$row["tech_phone"]."</td>
			<td>".$row["tech_field"]."</td>
			<td><a href=/techhelpdesk/tech/edit_tech.php?id=".$row["tech_id"]." target='main'>EDIT</a></td>
			<td><a href=/techhelpdesk/delete_account.php?id=".$row["tech_id"]."&type=tech>DELETE</a></td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);

?>
</body>

</html>
