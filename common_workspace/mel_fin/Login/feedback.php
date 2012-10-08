<?php
if(isset($_GET["name"]))
$n=$_GET["name"];
if(isset($_GET["email"]))
$e=$_GET["email"];
if(isset($_GET["msg"]))
$m=$_GET["msg"];
if(isset($_GET["feed_date"]))
$f=$_GET["feed_date"];
require_once ('../mysqli_connect.php');
//$con = mysql_connect('localhost', 'root', '');
if (!$dbc)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("melange", $dbc);
		if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["msg"]) && isset($_GET["feed_date"]) )
		{$q = "Insert Into feedback value('$n','$e','$m')";		
		$r = mysql_query ($q); 
		}

mysql_close($dbc);
?>