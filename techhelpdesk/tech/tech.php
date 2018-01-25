<html>

<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>
<?php
//Start session
session_start();
?>
<body>
<div id="sidebar">
  <div>
    <p class="title">Select Field</p>
    <ul>
      <li><a href="list.php?type=computer" target="techlist">Computer Technicians</a></li>
      <li><a href="list.php?type=electrical" target="techlist">Electrical Technicians</a></li>
      <li><a href="list.php?type=automobile" target="techlist">Automobile Technicians</a></li>
	  <br/><br/><br/>
	  <li class="highlight"><?php if($_SESSION['TYPE'] == "USER") echo "<a href='/techhelpdesk/user/user_home.php'>Go Back to User Home</a>";
				else echo "<a href='/techhelpdesk/login.html'>Go to User Login</a>"; ?></li>
    </ul>
	<br/><br/><br/>
  </div>
</div>
<div id="main">
	<h2>Hire a Technician</h2> please select a field from left.<hr/>
	<iframe name="techlist" width="100%" height="70%" align="left" frameborder="0"></iframe>
	<br id="endmain" />
</div>
</body>

</html>