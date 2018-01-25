<?php
	session_start();
	
	session_unset();
	session_destroy();
?>
<html>
<head>
<link rel="stylesheet" href="/techHelpDesk/styles.css" type="text/css" />
</head>

<body>
<script type="text/javascript">
	alert("You Have Logged Out Successfully!");
</script>

<a href="home.html"><h3>Go to Home Page</h3></a>
</body>

</html>
