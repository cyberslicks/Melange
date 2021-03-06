<?php
session_start();
require 'oAuthInterface.php';
$oAuth = new oAuthLogin();
?>

<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths wf-proximanova1proximanova2-n3-active wf-proximanova1proximanova2-n4-active wf-proximanova1proximanova2-i4-active wf-proximanova1proximanova2-n7-active wf-proximanova1proximanova2-n8-active wf-proximanova1proximanova2-n9-active wf-chaparralpro1chaparralpro2-n3-active wf-chaparralpro1chaparralpro2-n4-active wf-active" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	-->
	
	
	<title>Melange: Downloads</title>
	
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

<style></style><style></style><script type="text/javascript" src="./js/injected.js"></script>
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
	<a href="http://cyberslicks.wordpress.com"><div class="headertile">
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

	<script src="./js/jquery-1.4.4.min.js" type="text/javascript">
	</script>


		
			
		    <style type="text/css">
		
		/* --------------polaroids css------------------------------------ */
		body{
		background-color:black;}
		ul.polaroids { width: 970px; margin: 0 0 18px -30px; }
		ul.polaroids li { display: inline; }
		ul.polaroids a { background: #fff; display: inline; float: left; margin: 0 0 27px 30px; width: auto; padding: 10px 10px 15px; text-align: center; font-family: "Marker Felt", sans-serif; text-decoration: none; color: #333; font-size: 18px; -webkit-box-shadow: 0 3px 6px rgba(0,0,0,.25); -moz-box-shadow: 0 3px 6px rgba(0,0,0,.25); -webkit-transform: rotate(-2deg); -webkit-transition: -webkit-transform .15s linear; -moz-transform: rotate(-2deg); }
		ul.polaroids img { display: block; width: 190px; margin-bottom: 12px; }
		ul.polaroids a:after { content: attr(title); }
		
		ul.polaroids li:nth-child(even) a { -webkit-transform: rotate(2deg);  -moz-transform: rotate(2deg); }
		ul.polaroids li:nth-child(3n) a { -webkit-transform: none; position: relative; top: -5px;  -moz-transform: none; }
		ul.polaroids li:nth-child(5n) a { -webkit-transform: rotate(5deg); position: relative; right: 5px;  -moz-transform: rotate(5deg); }
		ul.polaroids li:nth-child(8n) a { position: relative; right: 5px; top: 8px; }
		ul.polaroids li:nth-child(11n) a { position: relative; left: -5px; top: 3px; }
		
		ul.polaroids li.messy a { margin-top: -375px; margin-left: 160px; -webkit-transform: rotate(-5deg); -moz-transform: rotate(-5deg); }
		
		ul.polaroids li a:hover { -webkit-transform: scale(1.25); -moz-transform: scale(1.25); -webkit-box-shadow: 0 3px 6px rgba(0,0,0,.5); -moz-box-shadow: 0 3px 6px rgba(0,0,0,.5); position: relative; z-index: 5; }
		
		code { background: rgba(0,0,0,.5); padding: 2px 3px; color: #fff; text-shadow: 0 1px 1px rgba(0,0,0,.75); -webkit-border-radius: 3px; -moz-border-radius: 3px; }
		
		ol.code { background: rgba(0,0,0,.75); margin-bottom: 18px; border: solid rgba(0,0,0,.75); border-width: 1px 1px 0; -webkit-border-radius: 3px; -moz-border-radius: 3px; -webkit-box-shadow: 0 1px 1px rgba(255,255,255,.5); }
		ol.code li, ol.code li code { font-size: 14px !important; }
		ol.code code { background: none; }
    </style>


	
	</head>
	
	<body id="css3PolaroidsPage" class=" " data-twttr-rendered="true" idgust="y">

	<h1 id="title"><center> Downloads</h1></center>

	<!-- All HTML Here -->	

<div id="poldiv">
<center>
	<ul class="polaroids">
		<!--	<li>
			<a href="" title="Click To Download">
				<img src="./Polaroid_files/image-01.jpg" alt="Click To Download">
			</a>
		</li>
		<li>
			<a href="" title="Discussion">
				<img src="./Polaroid_files/image-02.jpg" alt="Discussion">
			</a>
		</li>
		-->
		
	</ul>
</center>
	</div>

	
<style>
#title{
color:white;
font-size:20px;
}










</style>







</head>
<body>

	<footer id="main-footer">
	<section id="footer-wrap">

	<aside class="foot-tab">
	<header>
	Contact Us:
	</header>
	<div>
	<span class="bold">Call:</span> +91 9953267725
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
	<img src="./images/facebook.png"> &nbsp;
	<img src="./images/twitter.png"> &nbsp;
	<img src="./images/google+.png"> &nbsp;
	</br>
	<img src="./images/github.png"> &nbsp;
	<img src="./images/wordpress.png"> &nbsp;
	</div>


	</div>
	</aside>

	<aside class="foot-tab">
	<header>
	Mailing List:
	</header>
	<div>
	<form action="./mailing-list.php" method="post">
	<input type="email" class="footer-email" placeholder="your email address....">

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
	<script>window.jQuery || document.write("<script src='js/jquery-1.8.2.min.js'>\x3C/script>")</script>

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

	</body>
	</html>



</section>


 
</footer>


	<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="./js/jquery.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.8.2.min.js'>\x3C/script>")</script>

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

</body>
</html>

	
	
		
	