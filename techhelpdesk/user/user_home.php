<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<div id="sidebar">
  <div>
    <p class="title">User Information</p>
    <ul>
      <li><a href="my_tech.php" target="user">View My Hire Details</a></li>
      <li><a href="/techhelpdesk/user/edit_user.php">Edit My Details</a></li>
      <li><a onclick="deleteConfirm()">Delete Account</a></li>
	  <li><a href="/techhelpdesk/logout.php">Log Out</a></li>
    </ul>
  </div>
</div>
<div id="main">
<?php
//Start session
session_start();
$id = $_SESSION['USER_ID'];
$name = $_SESSION['USER_NAME'];
$password = $_SESSION['USER_PASSWORD'];
$email = $_SESSION['USER_EMAIL'];
$phone = $_SESSION['USER_PHONE'];
$address = $_SESSION['USER_ADDRESS'];
echo "<table>
		<tr><th class='right'>ID</th><td class='left'>:".$id."</td></tr>
		<tr><th class='right'>Name</th><td class='left'>:".$name."</td></tr>
		<tr><th class='right'>Email</th><td class='left'>:".$email."</td></tr>
		<tr><th class='right'>Phone</th><td class='left'>:".$phone."</td></tr>
		<tr><th class='right'>Field</th><td class='left'>:".$address."</td></tr>
	</table>";
echo "<script>
	function deleteConfirm(){
		if(confirm('Are you sure you want to delete?')){
			window.location.assign('/techhelpdesk/delete_account.php');
		}
	}
	</script>";
?>
<hr/>
<iframe name="user" width="100%" height="70%" align="left" frameborder="0"></iframe>
<br id="endmain" />
</div>
</body>

</html>
