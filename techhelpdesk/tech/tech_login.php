<html>
<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>
<body>
<?php
//Start session
session_start();
require_once '../dbconnect/db_connect.php';

$sql="SELECT * FROM tech_info WHERE tech_email='$_POST[email]' AND tech_password='$_POST[password]'";
$result=mysql_query($sql,$con);

//Check whether the query was successful or not
if(mysql_num_rows($result) == 1) {
	//Login Successful
	$user = mysql_fetch_assoc($result);
	$_SESSION['TYPE'] = "TECH";
	$_SESSION['TECH_ID'] = $user['tech_id'];
	$_SESSION['TECH_NAME'] = $user['tech_name'];
	$_SESSION['TECH_PASSWORD'] = $user['tech_password'];
	$_SESSION['TECH_EMAIL'] = $user['tech_email'];
	$_SESSION['TECH_PHONE'] = $user['tech_phone'];
	$_SESSION['TECH_FIELD'] = $user['tech_field'];
	
	echo "<script type='text/javascript'>\n";
	echo "	alert('Technician Logged In Successfully!');\n";
	echo "</script>\n";
	echo "<a href='/techhelpdesk/tech/tech_home.php'><h3>Go to My Account Page</h3></a>";

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
