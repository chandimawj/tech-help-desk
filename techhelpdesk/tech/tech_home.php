<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<div id="sidebar">
  <div>
    <p class="title">Technician Information</p>
    <ul>
      <li><a href="my_client.php" target="tech">View My Clients</a></li>
      <li><a href="/techhelpdesk/tech/edit_tech.php">Edit My Details</a></li>
      <li><a onclick="deleteConfirm()">Delete Account</a></li>
	  <li><a href="/techhelpdesk/logout.php">Log Out</a></li>
    </ul>
  </div>
</div>
<div id="main">
<?php
//Start session
session_start();
$id = $_SESSION['TECH_ID'];
$name = $_SESSION['TECH_NAME'];
$password = $_SESSION['TECH_PASSWORD'];
$email = $_SESSION['TECH_EMAIL'];
$phone = $_SESSION['TECH_PHONE'];
$field = $_SESSION['TECH_FIELD'];
echo "<table>
		<tr><th class='right'>ID</th><td class='left'>:".$id."</td></tr>
		<tr><th class='right'>Name</th><td class='left'>:".$name."</td></tr>
		<tr><th class='right'>Email</th><td class='left'>:".$email."</td></tr>
		<tr><th class='right'>Phone</th><td class='left'>:".$phone."</td></tr>
		<tr><th class='right'>Field</th><td class='left'>:".$field."</td></tr>
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
<iframe name="tech" width="100%" height="70%" align="left" frameborder="0"></iframe>
<br id="endmain" />
<div>
</body>

</html>