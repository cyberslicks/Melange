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


</head>
<body>
<?php
if(isset($_POST["username"]))
$q=$_POST["username"];
if(isset($_POST["password"]))
$w=$_POST["password"];
require_once ('../mysqli_connect.php');

if (!$dbc)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("melange", $dbc);
		if(isset($_POST["username"]) ){
		$q = "SELECT username FROM users where username='$q' and pass='$w'";		
		$r = mysql_query ($q); 




$row = mysql_fetch_array($r);

if($row['username'])
	echo "match";
	 
  else
	echo "not";}
mysql_close($dbc);
?>

<div id="header"><p style="font-family:Brush script MT;
font-size:4.0em;
font-weight:1.2em;position:absolute;margin-left:360px;margin-top:20px;color:rgb(250,253,253)">Melange</p>
<form name="new" action="signup/signup.php">
<input type="submit" value="Create a new Melange Account" id="new"/></form>
<div id="box">
<p style="font-size:1.6em;">Sign in </p>


<form  name="f" action="login.php" >
<p>Username</br></br>
<a class="tooltip" ><input type="text" onkeyup="showCustomer(this.value)" id="field" class="tooltip" name="username"/><span class="classic" >Fill ur name</span></a>
<p>Password</br></br>
<a class="tooltip" ><input type="password"  name="password" class="tooltip" id="field" onkeyup="showCustomer1(this.value)"  />
<span class="classic" >Fill Password</span></a>
<div id="strendth"></div>
</p>

<input type="submit" id="sub" value="Login"  />

</div>
</div>
<div id="downa">

</body>
</html>