<?php
//Start session
session_start();
require_once '../dbconnect/db_connect.php';
if($_SESSION['TYPE'] == "ADMIN"){
	$sql="SELECT user_id,user_name,user_password,user_email,user_phone,user_address FROM user_info WHERE user_id='$_GET[id]'";
	$result=mysql_query($sql,$con);
	$row = mysql_fetch_assoc($result);
	$id = $row["user_id"];
	$name = $row["user_name"];
	$password = $row["user_password"];
	$email = $row["user_email"];
	$phone = $row["user_phone"];
	$address = $row["user_address"];
}
elseif($_SESSION['TYPE'] == "USER"){
	$id = $_SESSION['USER_ID'];
	$name = $_SESSION['USER_NAME'];
	$password = $_SESSION['USER_PASSWORD'];
	$email = $_SESSION['USER_EMAIL'];
	$phone = $_SESSION['USER_PHONE'];
	$address = $_SESSION['USER_ADDRESS'];
}
?>
<html>

<head>
<link rel="stylesheet" href="/techhelpdesk/styles.css" type="text/css" />
<script src="/techhelpdesk/user/formvalidate.js"></script>
</head>

<body>
<div id="sidebar">
  <div>
    <p class="title">Edit User</p>
  </div>
</div>
<div id="main">
<h3>Edit User</h3>
	<fieldset>
		<legend>Edit Details</legend>
		<form name="regform" onSubmit="return formValidation();" action="edit_user2.php?id=<?php echo $id; ?>" method="post">
			<p><label>ID:</label><?php echo $id; ?></p>
			<p><label>Name:</label>
			<input type="text" name="name" size="45" value="<?php echo $name; ?>" required/><br/></p>		
			<p><label>Password:</label>
			<input type="text" name="password" size="10" value="<?php echo $password; ?>" required/><br/></p>
			<p><label>Email:</label>
			<input type="text" name="email" size="45" value="<?php echo $email; ?>" required/><br/></p>
			<p><label>Phone:</label>
			<input type="text" name="phone" size="20" value="<?php echo $phone; ?>" required/><br/></p>
			<p><label>Address:</label>
			<textarea name="address" rows="5" cols="50" required><?php echo $address; ?></textarea><br/></p>
			<p><input type="submit" name="send" value="Save Edits" />
			<input type="reset" name="cancel" value="Cancel" /></p>
			<p><?php if($_SESSION['TYPE'] == "ADMIN") echo "<a href='/techhelpdesk/admin/admin_home.php'>Go Back</a>";
				elseif($_SESSION['TYPE'] == "USER") echo "<a href='/techhelpdesk/user/user_home.php'>Go Back</a>"; ?></p>
		</form>
	
	</fieldset>
	<br id="endmain" />
</div>
</body>

</html>
