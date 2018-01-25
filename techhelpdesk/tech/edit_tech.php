<?php
//Start session
session_start();
require_once '../dbconnect/db_connect.php';
if($_SESSION['TYPE'] == "ADMIN"){
	$sql="SELECT tech_id,tech_name,tech_password,tech_email,tech_phone,tech_field FROM tech_info WHERE tech_id='$_GET[id]'";
	$result=mysql_query($sql,$con);
	$row = mysql_fetch_assoc($result);
	$id = $row["tech_id"];
	$name = $row["tech_name"];
	$password = $row["tech_password"];
	$email = $row["tech_email"];
	$phone = $row["tech_phone"];
	$field = $row["tech_field"];
}
elseif($_SESSION['TYPE'] == "TECH"){
	$id = $_SESSION['TECH_ID'];
	$name = $_SESSION['TECH_NAME'];
	$password = $_SESSION['TECH_PASSWORD'];
	$email = $_SESSION['TECH_EMAIL'];
	$phone = $_SESSION['TECH_PHONE'];
	$field = $_SESSION['TECH_FIELD'];
}

?>
<html>

<head>
<link rel="stylesheet" href="/techhelpdesk/styles.css" type="text/css" />
<script src="/techhelpdesk/tech/formvalidate.js"></script>
</head>

<body>
<div id="sidebar">
  <div>
    <p class="title">Edit Technician</p>
  </div>
</div>
<div id="main">
<h3>Edit Technician</h3>
	<fieldset>
		<legend>Edit Details</legend>
		<form name="regform" onSubmit="return formValidation();" action="edit_tech2.php?id=<?php echo $id; ?>" method="post">
			<p><label>ID:</label><?php echo $id; ?></p>
			<p><label>Name:</label>
			<input type="text" name="name" size="45" value="<?php echo $name; ?>" required/><br/></p>		
			<p><label>Password:</label>
			<input type="text" name="password" size="20" value="<?php echo $password; ?>" required/><br/></p>
			<p><label>Email:</label>
			<input type="text" name="email" size="45" value="<?php echo $email; ?>" required/><br/></p>
			<p><label>Phone:</label>
			<input type="text" name="phone" size="20" value="<?php echo $phone; ?>" required/><br/></p>
			<p><label>Field of Expertise:</label><br/>
			<input type="radio" name="field" value="Computer"/>Computer<br/>
			<input type="radio" name="field" value="Electrical"/>Electrical<br/>
			<input type="radio" name="field" value="Automobile"/>Automobile</p>
			<p><input type="submit" name="send" value="Save Edits" />
			<input type="reset" name="cancel" value="Cancel" /></p>
			<p><?php if($_SESSION['TYPE'] == "ADMIN") echo "<a href='/techhelpdesk/admin/admin_home.php'>Go Back</a>";
				elseif($_SESSION['TYPE'] == "TECH") echo "<a href='/techhelpdesk/tech/tech_home.php'>Go Back</a>"; ?></p>
		</form>
	
	</fieldset>
	<br id="endmain" />
</div>
</body>

</html>
