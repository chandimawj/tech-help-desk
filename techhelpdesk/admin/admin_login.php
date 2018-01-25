<html>
<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>
<body>
<?php
//Start session
session_start();

$password = "1234";
if($_POST[password] == $password){
	//Login successful
	$_SESSION['TYPE'] = "ADMIN";
	
	echo "<script type='text/javascript'>\n";
	echo "	alert('Admin Logged In Successfully!');\n";
	echo "</script>\n";
	echo "<a href='admin_home.php'><h3>Go to Admin Home Page</h3></a>";

}else {
	//Login failed
	echo "<script type='text/javascript'>\n";
	echo "	alert('Admin Log In Failed!');\n";
	echo "</script>\n";
	echo "<a href='/techhelpdesk/home.html'><h3>Go to Login Page</h3></a>";
}
 ?>
</body>

</html>
