<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<?php
require_once '../dbconnect/db_connect.php';

$sql="SELECT tech_id,tech_name,tech_email,tech_phone FROM tech_info WHERE tech_field='$_GET[type]'";
$result=mysql_query($sql,$con);

echo "<h3>".$_GET[type]." technicians</h3>";
echo "<table class='simple'>";
echo "<tr>";
echo "<th>Technician ID</th> 
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>";
echo "</tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>";
	echo   "<td>".$row["tech_id"]."</td> 
			<td>".$row["tech_name"]."</td>
			<td>".$row["tech_email"]."</td>
			<td>".$row["tech_phone"]."</td>
			<td><a href=/techhelpdesk/join.php?id=".$row["tech_id"].">HIRE</a></td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);

?>
</body>

</html>
