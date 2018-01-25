<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<?php
//Start session
session_start();
require_once 'dbconnect/db_connect.php';
if($_SESSION['TYPE'] == "USER"){
	$id=$_SESSION['USER_ID'];
	$sql="INSERT INTO hire_info (user_id, tech_id) VALUES ($id, '$_GET[id]')";
		if (!mysql_query($sql,$con)){
			die('Error: ' . mysql_error());
		}

	echo "<script type='text/javascript'>\n";
	echo "	alert('Hired Successfully!');\n";
	echo "</script>\n";

}
else{
	echo "<script type='text/javascript'>\n";
	echo "	alert('You are not logged in as User');\n";
	echo "</script>\n";
	}
mysql_close($con);
?>
</body>

</html>
