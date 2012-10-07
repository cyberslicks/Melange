<?php

$w=$_GET["password"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("melange", $con);
		$q = "SELECT username FROM users where pass='$w'";		
		$r = mysql_query ($q); 




$row = mysql_fetch_array($r);
  if($row['username'])
	echo "match";
	 
  else
	echo "not";
  

mysql_close($con);
?>