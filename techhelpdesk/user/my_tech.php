<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<?php
//Start session
session_start();
require_once '../dbconnect/db_connect.php';

$id=$_SESSION['USER_ID'];
$sql="SELECT hire_info.hire_id, tech_info.tech_id, tech_info.tech_name, tech_info.tech_email, tech_info.tech_phone, tech_info.tech_field 
	FROM hire_info
	INNER JOIN tech_info
	ON hire_info.tech_id=tech_info.tech_id
	WHERE hire_info.user_id=$id";
$result=mysql_query($sql,$con);

echo "<h3>My Technician Hire Details</h3>";
echo "<table class='simple'>";
echo "<tr>";
echo "<th>Hire ID</th>
	<th>Technician ID</th>
	<th>Technician Name</th>
	<th>Technician Email</th>
	<th>Technician Phone</th>
	<th>Technician Field</th>";
	echo "</tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>";
	echo   "<td>".$row["hire_id"]."</td> 
			<td>".$row["tech_id"]."</td> 
			<td>".$row["tech_name"]."</td>
			<td>".$row["tech_email"]."</td>
			<td>".$row["tech_phone"]."</td>
			<td>".$row["tech_field"]."</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);

?>
</body>

</html>