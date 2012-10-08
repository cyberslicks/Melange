<?php

$q=$_GET["username"];
$w=$_GET["password"];
require_once ('../mysqli_connect.php');

if (!$dbc)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("melange", $dbc);
		$q = "SELECT username FROM users where username='$q' and pass='$w'";		
		$r = mysql_query ($q); 




$row = mysql_fetch_array($r);
  if($row['username'])
	echo "match";
	 
  else
	echo "not";
  

mysql_close($dbc);
?>