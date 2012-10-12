<?php
session_start();
$var=1;
if(isset($_POST["username"]) && isset($_POST["username"]))
{
$q=$_POST["username"];
$w=$_POST["password"];
require_once ('../mysqli_connect.php');

if (!$dbc)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("melange", $dbc);
		if(isset($_POST["username"]) ){
		$query = "SELECT username FROM users where username='$q' and pass='$w'";		
		$r = mysql_query ($query); 




$row = mysql_fetch_array($r);

if($row['username'])
	{//echo "<h1>match</h1>";
	$_SESSION['user_name'] = $q;
  $_SESSION['logged_in'] = 1;
  
	 header('Location:Front.php');}
  else{
   $var=-1;
	//echo "<h1>not</h1>";}
	}
mysql_close($dbc);
}
}
if($var==-1 || !(isset($_POST["username"]) && isset($_POST["username"])) ){
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="form.css"/>
<link rel="stylesheet" type="text/css" href="tooltip.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$("#tooltip span").fadeIn(3000);
});


</script>
<style type="text/style">
#error1{
color:red;
}
</style>

</head>
<body>


<div id="header"><p style="font-family:Brush script MT;
font-size:4.0em;
font-weight:1.2em;position:absolute;margin-left:360px;margin-top:20px;color:rgb(250,253,253)">Melange</p>
<form name="new" action="signup/signup.php">
<input type="submit" value="Create a new Melange Account" id="new"/></form>
<div id="box">
<p style="font-size:1.6em;">Sign in </p>


<form  name="f" action="login.php" method="post">
<p>Username</br></br>
<a class="tooltip" ><input type="text"  id="field" class="tooltip" name="username"/><span class="classic" >Fill ur name</span></a>
<p>Password</br></br>
<a class="tooltip" ><input type="password"  name="password" class="tooltip" id="field"   />
<span class="classic" >Fill Password</span></a>
</p>
<?php
if($var==-1 && (isset($_POST["username"]) && isset($_POST["username"])))
echo " <div id=\"error1\" >Username & Password didn't match !</div>";
?>

<input type="submit" id="sub" value="Login"  />

</div>
</div>
<div id="downa">

</body>
</html>
<?php
}
?>