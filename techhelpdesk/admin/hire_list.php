<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<h3>All Hire Records</h3>
<?php
require_once '../dbconnect/db_connect.php';

$sql="SELECT * FROM hire_info";
$result=mysql_query($sql,$con);

echo "<table class='simple'>";

echo "<tr>";
echo "<th>Hire ID</th> 
	<th>User ID</th>
	<th>Technician ID</th>";
echo "</tr>";

while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>";
	echo   "<td>".$row["hire_id"]."</td> 
			<td>".$row["user_id"]."</td>
			<td>".$row["tech_id"]."</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);

?>
</body>

</html>
