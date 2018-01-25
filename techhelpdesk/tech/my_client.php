<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<?php
//Start session
session_start();
require_once '../dbconnect/db_connect.php';

$id=$_SESSION['TECH_ID'];
$sql="SELECT hire_info.hire_id, user_info.user_id, user_info.user_name, user_info.user_email, user_info.user_phone, user_info.user_address 
	FROM hire_info
	INNER JOIN user_info
	ON hire_info.user_id=user_info.user_id
	WHERE hire_info.tech_id=$id";
$result=mysql_query($sql,$con);

echo "<h3>My Client Details</h3>";
echo "<table class='simple'>";
echo "<tr>";
echo "<th>Hire ID</th>
	<th>User ID</th>
	<th>User Name</th>
	<th>User Email</th>
	<th>User Phone</th>
	<th>User Address</th>";
	echo "</tr>";
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>";
	echo   "<td>".$row["hire_id"]."</td> 
			<td>".$row["user_id"]."</td> 
			<td>".$row["user_name"]."</td>
			<td>".$row["user_email"]."</td>
			<td>".$row["user_phone"]."</td>
			<td>".$row["user_address"]."</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);

?>
</body>

</html>