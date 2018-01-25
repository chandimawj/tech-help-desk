<html>
<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>
<body>
<?php
session_start();
$id = $_GET[id];
require_once '../dbconnect/db_connect.php';

$sql="UPDATE user_info 
	SET user_name='$_POST[name]', user_password='$_POST[password]', user_email='$_POST[email]', user_phone='$_POST[phone]' , user_address='$_POST[address]'
	WHERE user_id=$id";
 
if (!mysql_query($sql,$con)){
	die('Error: ' . mysql_error());
}

$_SESSION['USER_NAME'] = $_POST[name];
$_SESSION['USER_PASSWORD'] = $_POST[password];
$_SESSION['USER_EMAIL'] = $_POST[email];
$_SESSION['USER_PHONE'] = $_POST[phone];
$_SESSION['USER_ADDRESS'] = $_POST[address];

echo "<script type='text/javascript'>\n";
echo "	alert('User Details Saved Successfully!');\n";
echo "</script>\n";

if($_SESSION['TYPE']=="ADMIN"){
	echo "<a href='/techhelpdesk/admin/admin_home.php'><h3>Go Back to Admin Home Page</h3></a>";
}
elseif($_SESSION['TYPE']=="USER"){
	echo "<a href='user_home.php'><h3>Go Back to User Home Page</h3></a>";
}
?>
</body>

</html>


