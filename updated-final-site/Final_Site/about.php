<?php
session_start();
require 'oAuthInterface.php';
$oAuth = new oAuthLogin();


?>
<!DOCTYPE html>
<head>
<title>about</title>
<style>


.about{
	
	background:#f3f3f3;
	color:#cccccc;
	font-family:"Arial Narrow";
	font-size:70px;
	padding:25px;
	
	font-weight: bold;
	
	
}

.about-content {
	
	background: white;
	margin-top:40px;
	padding-top:15px;
	padding-left: 10px;
	padding-bottom: 10px;
	color:black;
	font-family: "Lucida Sans Unicode";
	font-size:30px;
	box-shadow: 1px 1px 1px black;
	margin-left:-5px;
	margin-bottom:10px;
}



.about-heads {
	
	margin-top:30px;
	color:#cccccc;
	font-size:40px;
	font-family: Tahoma;
	
}

.about-points {
	
	font-size:0.7em;
	margin-top:7px;
	color:black;
	font-family: sans-serif;
	font-weight: normal;
	
	padding: 8px;
	padding-left: 0;
	clear:both;
	
	
	
}




</style>

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
			echo "<img  src=\"".$userData['img']."\  width=\"30px\" height=\"30px\"style=\"margin-left:-1112px;position:absolute; top:10px;\">";
		
			}
			echo "<span id=\"stwel\">Welcome "  .$_SESSION['user_name'];
			echo "&nbsp;";
			echo " <a href=\"".$oAuth->getLogoutUrl()."\"><input type=\"button\" class=\"o-awesome\" value=\"Log Out\"/></a></span>";
			//echo "<a href=\"".$oAuth->getLogoutUrl()."\">log-out</a>";
	
			}
		
			?>
		
		</div>
		
</div>





</head>
<body>






<section class="about">


About <span style="color:#c11921; font-family:Impact;font-size:60px;">  Melange  </span>

<div class="about-content">

Melange is an open source powered web page builder , to provide static sweetness without prior taste of web-design.
</br>

<div class="about-heads">
Concept
</div>
<div class="about-points">
The core concept behind melange is to provide most user intuitive way to design the web page,without taking care of semantics and styling head aches.</br>
Response time was also the major focus i development stages , so choosing client side technology ,for user interactions ,like javascript was inevitable</br>
Also , every possible styling options is provided so that user dont have to manually tweak styling.</br>
In addition every bit about melange is open source , freely available on internet and made for masses.

</div>

<div class="about-heads">
Features
</div>
<div class="about-points">
Developing Melange as feature rich library and user program was main motive , so finding amazing features is natural.</br>
Here as some notable ones ,</br>
<ul>
<li>Live preview of Page</li>
<li>Draggable and resizable elements </li>
<li> User friendly property pane</li>
<li>Easy space management</li>
<li>Huge variety of customisable options </li>
<li>Dynamic code generation </li>
<li> open source</li>

</ul>
These are just few of amazing capabilities of what melange can do
</div>



</div>
</section>

<section class="about">


About <span style="color:#c11921; font-family:Impact;font-size:60px;">  Us (The devs)  </span>

<div class="about-content">




<div class="about-heads">
Introduction
</div>
<div class="about-points">
We are under grads pursuing B.Tech in computer science from Noida,India, 
and are passionate developers and hackers getting our hands dirty on open source web development.We believe in open source and freedom of information</br>
thats why we decided to start this project with open source principle and decided to make its code freely available.</br>
Our hobbies include playing with technology and cook something out regularly out of it.</br></br>
We are named as Mayank Bhola , Varun Malhotra , Harsh Bhatia respectively (in case you were curious)</br>
BTW we are also known for our leg pulling skills :p

</div>

<div class="about-heads">
Catch Us
</div>
<div class="about-points">
Our usual hangout places :</br>
# <b>Mayank Bhola </b>
<ul style="color:#cccccc;">
<li>mayankbhola@gmail.com</li>
<li>www.facebook.com/mayank.bhola</li>
<li>www.twitter.com/mayankbhola</li>
</ul>
</br>

# <b>Varun Malhotra </b>
<ul style="color:#cccccc;">
<li>mayankbhola@gmail.com</li>
<li>www.facebook.com/mayank.bhola</li>
<li>www.twitter.com/mayankbhola</li>
</ul>
</br>


# <b>Harsh Bhatia</b>
<ul style="color:#cccccc;">
<li>harshbhatia296@gmail.com</li>
<li>www.facebook.com/harshthedeadman</li>
<li>www.twitter.com/The_HarshBhatia</li>
</ul>
</br>



</div>
</section>

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
padding-left:200px;
padding-top:50px;
margin-left:0 auto;
margin-right:0 auto;
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














</body>
</html>