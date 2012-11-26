<?php
$n=$_GET["nav"];


$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("melange", $con);
		$q = "INSERT INTO navbar values('$n')";		
		$r = mysql_query ($q); 
echo "done";
  

mysql_close($con);
?>