<html>
<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>
<body>
<?php
//Start session
session_start();
require_once '../dbconnect/db_connect.php';

$sql="SELECT * FROM user_info WHERE user_email='$_POST[email]' AND user_password='$_POST[password]'";
$result=mysql_query($sql,$con);

//Check whether the query was successful or not
if(mysql_num_rows($result) == 1) {
	//Login Successful
	$user = mysql_fetch_assoc($result);
	$_SESSION['TYPE'] = "USER";
	$_SESSION['USER_ID'] = $user['user_id'];
	$_SESSION['USER_NAME'] = $user['user_name'];
	$_SESSION['USER_PASSWORD'] = $user['user_password'];
	$_SESSION['USER_EMAIL'] = $user['user_email'];
	$_SESSION['USER_PHONE'] = $user['user_phone'];
	$_SESSION['USER_ADDRESS'] = $user['user_address'];
	
	echo "<script type='text/javascript'>\n";
	echo "	alert('User Logged In Successfully!');\n";
	echo "</script>\n";
	echo "<a href='user_home.php'><h3>Go to My Account Page</h3></a>";

}else {
	//Login failed
	echo "<script type='text/javascript'>\n";
	echo "	alert('User Log In Failed!');\n";
	echo "</script>\n";
	echo "<a href='/techhelpdesk/login.html'><h3>Go to Login Page</h3></a>";
}
 ?>
</body>

</html>
