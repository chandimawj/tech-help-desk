<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techhelpdesk_db";

//connect to mysql server
$con = mysql_connect($servername, $username, $password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
// select a database
$db_selected = mysql_select_db($dbname, $con);
if (!$db_selected) {
    die ('Can\'t use database : ' . mysql_error());
}
?>