<html>

<head>
<link rel="stylesheet" href="/techhelpdesk/styles.css" type="text/css" />
</head>

<body>
<?php
//Start session
session_start();
require_once 'dbconnect/db_connect.php';
if($_SESSION['TYPE'] == "ADMIN" && $_GET[type] == "user"){
	$sql="DELETE FROM user_info WHERE user_id='$_GET[id]'";
	if (!mysql_query($sql,$con)){
		die('Error: ' . mysql_error());
	}
	echo "<script type='text/javascript'>\n";
	echo "	alert('User Deleted Successfully!');\n";
	echo "</script>\n";
}
elseif($_SESSION['TYPE'] == "ADMIN" && $_GET[type] == "tech"){
	$sql="DELETE FROM tech_info WHERE tech_id='$_GET[id]'";
	if (!mysql_query($sql,$con)){
		die('Error: ' . mysql_error());
	}
	echo "<script type='text/javascript'>\n";
	echo "	alert('Technician Deleted Successfully!');\n";
	echo "</script>\n";
}
elseif($_SESSION['TYPE'] == "USER"){
	$sql="DELETE FROM user_info WHERE user_id='$_SESSION[USER_ID]'";
	if (!mysql_query($sql,$con)){
		die('Error: ' . mysql_error());
	}
	session_unset();
	session_destroy();
	echo "<script type='text/javascript'>\n";
	echo "	alert('User Deleted Successfully!');\n";
	echo "</script>\n";
	echo "<a href='home.html'><h3>Go to Home Page</h3></a>";
}
elseif($_SESSION['TYPE'] == "TECH"){
	$sql="DELETE FROM tech_info WHERE tech_id='$_SESSION[TECH_ID]'";
	if (!mysql_query($sql,$con)){
		die('Error: ' . mysql_error());
	}
	session_unset();
	session_destroy();
	echo "<script type='text/javascript'>\n";
	echo "	alert('User Deleted Successfully!');\n";
	echo "</script>\n";
	echo "<a href='home.html'><h3>Go to Home Page</h3></a>";
}
?>
</body>

</html>
