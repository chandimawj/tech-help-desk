<html>
<head>
<link rel="stylesheet" href="/techhelpdesk/styles.css" type="text/css" />
</head>
<body>
<?php
session_start();
$id = $_GET[id];
require_once '../dbconnect/db_connect.php';

$sql="UPDATE tech_info 
	SET tech_name='$_POST[name]', tech_password='$_POST[password]', tech_email='$_POST[email]', tech_phone='$_POST[phone]', tech_field='$_POST[field]' 
	WHERE tech_id=$id";
 
if (!mysql_query($sql,$con)){
	die('Error: ' . mysql_error());
}

$_SESSION['TECH_NAME'] = $_POST[name];
$_SESSION['TECH_PASSWORD'] = $_POST[password];
$_SESSION['USER_EMAIL'] = $_POST[email];
$_SESSION['TECH_PHONE'] = $_POST[phone];
$_SESSION['TECH_FIELD'] = $_POST[field];

echo "<script type='text/javascript'>\n";
echo "	alert('Technician Details Saved Successfully!');\n";
echo "</script>\n";

if($_SESSION['TYPE']=="ADMIN"){
	echo "<a href='/techhelpdesk/admin/admin_home.php'><h3>Go Back to Admin Home Page</h3></a>";
}
elseif($_SESSION['TYPE']=="TECH"){
	echo "<a href='tech_home.php'><h3>Go Back to Technician Home Page</h3></a>";
}
?>
</body>

</html>
