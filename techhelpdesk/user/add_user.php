<html>
<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>
<body>
<?php
require_once '../dbconnect/db_connect.php';

$sql="INSERT INTO user_info (user_name, user_password, user_email, user_phone, user_address) 
	VALUES ('$_POST[name]', '$_POST[password]', '$_POST[email]', '$_POST[phone]', '$_POST[address]')";
 
if (!mysql_query($sql,$con)){
	die('Error: ' . mysql_error());
}

echo "<script type='text/javascript'>\n";
echo "	alert('User Added Successfully!');\n";
echo "</script>\n";

?>
<a href="/techhelpdesk/login.html"><h3>Go Back to Log In Page</h3></a>
</body>

</html>


