<?php
session_start();
require 'oAuthInterface.php';
$oAuth = new oAuthLogin();
include '../mysqli_connect.php';
mysql_select_db("melange", $dbc);
$errors = array();
?>
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths wf-proximanova1proximanova2-n3-active wf-proximanova1proximanova2-n4-active wf-proximanova1proximanova2-i4-active wf-proximanova1proximanova2-n7-active wf-proximanova1proximanova2-n8-active wf-proximanova1proximanova2-n9-active wf-chaparralpro1chaparralpro2-n3-active wf-chaparralpro1chaparralpro2-n4-active wf-active" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	-->
	
	
	<title>Melange: apology</title>
	
	<!-- Typekit -->
	<script async="" src="./js/ga.js"></script>
	<script type="text/javascript" src="./js/qhr0pzy.js"></script>
	<style type="text/css"></style>
	<style type="text/css">
	.tk-proxima-nova{font-family:proxima-nova-1,proxima-nova-2,sans-serif;}
	.tk-chaparral-pro{font-family:chaparral-pro-1,chaparral-pro-2,sans-serif;}
	</style>
	<!--link rel="stylesheet" type="text/css" href="./styles/propertybox.css"/-->
	<link rel="stylesheet" href="./css/qhr0pzy-d.css">
	<link href="./css/modern.css" rel="stylesheet">
	<link href="./css/header.css" rel="stylesheet">
	<link href="./css/logcon.css" rel="stylesheet">
	<script type="text/javascript">
	try{Typekit.load();}catch(e){}
	</script>
	
	<!-- modernizr -->
	<script src="./js/modernizr-1.7.min.js"></script>
	


<!-- CCS globals -->
<link rel="stylesheet" href="./css/global.css">


<!-- css home -->
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./css/contactform.css">
<style></style><style></style><script type="text/javascript" src="./js/injected.js"></script>
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	vertical-align: baseline;

}


#main-footer {
	
	clear:both;
	width:100%;
	float:left;
background: black;
	
}

#footer-wrap {
	
	
	position:relative;
		margin:0 auto;
		width:900px;
		color: white;
		font-family: Arial,Verdana,sans-serif;
	background: black;
	
	padding:30px;
	padding-left:40px;
	padding-top:30px;
	
	
	
}

.foot-tab {
	float:left;
	margin-right: 100px;
	
}
.foot-tab header{
	
	margin-botom:10px;
	font-size:1.1em;
	font-family: sans-serif;
}

.foot-tab div {
	margin-top:20px;
	color:#818181;
	font-size: 0.8em;
	font-family: Tahoma;
	font-weight: normal;
	margin-bottom: 40px;
}

.bold {
	font-size: 0.9em;
	color:white;
	font-family: Helvetica;
	
	
}

.footer-email {
	background: #818181;
	color:#ffffff;
	border: none;
	outline:none;
	height:25px;
	width: 130px;
	margin-left:-3px;	

}

::-webkit-input-placeholder {
   color: #b1b1b1;
}

:-moz-placeholder {  
   color: #b1b1b1;  
}

.foot-submit {
	height: 26px;
	width: 26px;
	color:black;
	background: white;
	font-family: "Lucida Grande";
	border: none;
	
	
}



#inside{
background:white;
padding-left:400px;
padding-top:50px;
margin-left:0 auto;
margin-right:0 auto;
}
</style>
</head>

<body id="top">
<!--header-->
<div class="header">

	<a href="Front.php"><div class="headertile"id="heading">
	<h1 class="heading" ><B>
	Home</h1>
	</div></a>
	<a href="about.php"><div class="headertile">
	<h1 class="heading">
	About</h1>
	</div></a>
	<a href="feedback.php"><div class="headertile">
	<h1 class="heading">
	Contact</h1>
	</div></a>
	<a href="http://www.http://cyberslicks.wordpress.com"><div class="headertile">
	<h1 class="heading">
	Blog </h1>
	</div></a>
		
		<div id="userinfo">
		<?php
		if(isset($_SESSION['logged_in']) && ($_SESSION['logged_in']==1))
		{
		if(isset($_SESSION['oauth_vendor']) && (($_SESSION['oauth_vendor']=='facebook') || ($_SESSION['oauth_vendor']=='google')))
		{
		$userData = $oAuth->getUserData();
		echo "<img  src=\"".$userData['img']."\"  width=\"30px\" height=\"30px\"style=\"margin-left:-1112px;position:absolute; top:10px;\">";
		
		}
		echo "<span id=\"stwel\">Welcome "  .$_SESSION['user_name'];
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo " <a href=\"".$oAuth->getLogoutUrl()."\"><input type=\"button\" class=\"b-awesome\" value=\"Log Out\"/></a></span>";
		//echo "<a href=\"".$oAuth->getLogoutUrl()."\">log-out</a>";
	
		}
		else {
			
			echo " <a href=\"Front.php#loginbox\"><input type=\"button\" class=\"b-awesome\" value=\"Log In\"/></span></a>";
			
			
		}
		
		
			?>
		
		</div>
		
</div>

<?php
	
if((isset($_POST['email'])))
{
	$crash =0;
	
		if (empty($_POST['email'])) {
		array_push($errors,'You forgot to enter your email.');
	} else {
		$email = mysql_real_escape_string( trim($_POST['email']));
	
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	    
		    array_push($errors,'You didnt enter valid email address.');
		
			}
	
	
	
	}
	
	
	if(empty($errors)) {
			$query = "SELECT email FROM newsletter where email='$email'";		
			$r = mysql_query ($query); 
			$row = mysql_fetch_array($r);

	if($row['email'])
		{//echo "<h1>match</h1>";
		
			echo "<div id=\"inside\"";
			// Public message:
			echo '<h1 style="color:#bbbbbb; font-family:Arial Narrow;font-size:2.1em">Error</h1></br>
			<p class="error">You are already subscribed to our email list</br></br></p>'; 
			echo "</div>";		
	  
		}
	 
	  else{
		$q = "INSERT INTO newsletter (email,feed_date) VALUES ('$email', NOW() )";		
		$r = mysql_query ($q); // Run the query.
		if ($r) { // If it ran OK.
		
	   
			echo "<div id=\"inside\"";
			// Public message:
			echo '<h1 style="color:#bbbbbb; font-family:Arial Narrow;font-size:2.1em">Thank You</h1></br>
			<p class="error">For subscribing to our mailing list</p></br></br</br>'; 
			echo "</div>";	
		
	
			
			
		} else { // Report the errors.
			echo "<div id=\"inside\"";
			// Public message:
			echo '<h1 style="color:#bbbbbb; font-family:Arial Narrow;font-size:2.1em">System Error</h1></br>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p></br></br></br>'; 
			
			// Debugging message:
			echo '<p>' . mysql_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
		echo "</div>";	
		} 
		
		
	
		
			
			
			
			
			
		}
	}
	
	else { // Report the errors.
	
				echo '<div id="inside"><h1 style="color:#bbbbbb; font-family:Arial Narrow;font-size:2.1em">Error!</h1>
				<p>The following error(s) occurred:<br />';
				foreach ($errors as $msg) { // Print each error.
					echo " - $msg<br />\n";
				}
				echo '</p><p>Please try again.</p><p><br /></p>';
				echo "</br>";
					
				echo "</div>";
			}
	

mysql_close($dbc); // Close the database connection.
}
		
		
		
else
{
			header('Location:Front.php');
			
			
}
	
	
	

	
	
	
?>
<footer id="main-footer">
<section id="footer-wrap">

<aside class="foot-tab">
<header>
Contact Us:
</header>
<div>
<span class="bold">Call:</span> +91-9953267725</br>9910239493
</br>
<span class="bold">Email:</span> cyberslicks@gmail.com
</br>

<span class="bold">Skype</span>: ~cyberslicks

</div>
</aside>

<aside class="foot-tab">
<header>
Follow Us:
</header>
<div>
<div style="margin-left:-10px;">
<a href="https://www.facebook.com/pages/Cyberslicks/279407935509252"><img src="./images/facebook.png" > </a> &nbsp;
<a href="https://twitter.com/cyberslicks"> <img src="./images/twitter.png" > </a>&nbsp;
<img src="./images/google+.png"> &nbsp;
</br>
<a href="https://github.com/cyberslicks/Melange"><img src="./images/github.png"> </a>&nbsp;
<a href="http://cyberslicks.wordpress.com"><img src="./images/wordpress.png"> </a>&nbsp;
</div>


</div>
</aside>

<aside class="foot-tab">
<header>
Mailing List:
</header>
<div>
<form action="./mailing-list.php" method="post">
<input type="email" name="email" class="footer-email" placeholder="your email address....">

<input type="submit" value="Go" class="foot-submit">

</form>


</div>
</aside>

<aside class="foot-tab" style="margin-right:-120px;">
<header>
Boring Stuff:
</header>
<div>
&copy; copyright Melange 2012</br>
All Rights Reserved | Site Map |</br>
 Terms & Conditions |</br>
 Accessibility | Privacy Policy |</br> 
 Cookie Policy


</div>
</aside>






</section>


 
</footer>


	<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="./js/jquery.js"></script>


<!--[if lt IE 7 ]>
<script src="js/libs/dd_belatedpng.js"></script>
<script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
<![endif]-->



<!-- scripts concatenated and minified via ant build script-->
<!-- end scripts-->



<!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
<script>
var _gaq=[["_setAccount","UA-11149531-1"],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

	<script src="./js/script.js"></script>
    <script src="./js/jribbble.js"></script>
	<script src="./js/home_custom.js"></script>
</body></html>

