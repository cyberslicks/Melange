<?php
session_start();	

require 'oAuthInterface.php';
?>

<html>
<head>
	<title>fb check </title>
	
</head>
<body>



<?php
$oAuth = new oAuthLogin();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==1)
{
	
	
	$userData = $oAuth->getUserData();
	echo $userData['email']."~~".$userData['name']."~~~"."<img src=\"".$userData['img']."\">"."~~~".$userData['id'];	
}

?>

</body>