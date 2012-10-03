<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("melange", $con);
		$q = "SELECT data FROM SEARCHBAR where search='$q'";		
		$r = mysql_query ($q); 




$row = mysql_fetch_array($r);
  echo $row['data'] ;
  

mysql_close($con);
?>