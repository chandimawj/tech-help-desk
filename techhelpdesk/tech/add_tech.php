<html>
<head>
<link rel="stylesheet" href="/techhelpdesk/styles.css" type="text/css" />
</head>
<body>
<?php
require_once '../dbconnect/db_connect.php';

$sql="INSERT INTO tech_info (tech_name, tech_password, tech_email, tech_phone, tech_field) 
	VALUES ('$_POST[name]', '$_POST[password]', '$_POST[email]', '$_POST[phone]', '$_POST[field]')";
 
if (!mysql_query($sql,$con)){
	die('Error: ' . mysql_error());
}

echo "<script type='text/javascript'>\n";
echo "	alert('Technician Added Successfully!');\n"; 
echo "</script>\n";

?>
<a href="/techhelpdesk/login.html"><h3>Go Back to Log In Page</h3></a>
</body>

</html>


