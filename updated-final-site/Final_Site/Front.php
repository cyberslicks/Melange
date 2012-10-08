<?php
session_start();
require 'oAuthInterface.php';
$oAuth = new oAuthLogin();
?>
<!DOCTYPE html>

<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths wf-proximanova1proximanova2-n3-active wf-proximanova1proximanova2-n4-active wf-proximanova1proximanova2-i4-active wf-proximanova1proximanova2-n7-active wf-proximanova1proximanova2-n8-active wf-proximanova1proximanova2-n9-active wf-chaparralpro1chaparralpro2-n3-active wf-chaparralpro1chaparralpro2-n4-active wf-active" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	-->
	
	
	<title>Melange</title>
	
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



<!--slider begins here-->
<div class="clear"></div>		
		<div id="home_slider" style="margin-left: 0px; ">
		
		<section class="welcome" style="width: 1263px; ">
		<!--first welcome page-->
			<article class="container_12">
				<h1 class="grid_12">MELANGE</h1>
				<div class="clear"></div>
				
				
				<div class="grid_4 decoration"></div>
				<p class="grid_4" id="welcometab">Welcome</p>
				<div class="grid_4 decoration"></div>
				<div class="clear"></div>
				
				
				<h1 class="grid_12 image">
				<img src="./js/text_curve.png">
				</h1>
				<div class="clear"></div>
				
				<div class="grid_12 start_tour">
					<h1 class="grid_12 white start">Start the tour</h1>
					<h1 class="keyboard_help white">Love KEYBOARD ?? Use the keyboard arrows!</h1>
				</div>
				<div class="clear"></div>
				
				
			</article>
			
		</section>
		
			
		<section class="webmadeclean" style="width: 1263px; ">
			<article class="container_12">
				<div class="grid_6">
					<h1>About Melange</h1>
								
					<p>Melange is a Web page builder build by the team named Cyberslicks, for all users who dont have coding experience but have creative vision. Melange helps user to create interative user interface , web pages with the help of some realy easy and intuitive tools.Built as opensource from core, to let others
						extend it and redistribute , provided they keep licence with it.Hope you have nice expreince with Melange</p>
					
					<a href="about.html">About Cyberslick team</a>
					<br>
					
					
				</div>
				
				<aside class="grid_6">
				<img id="poster" src="./js/poster.png">
				</aside>
			</article>
			<div class="clear"></div>
			
		</section>
		
		<section class="imake" style="width: 1263px; ">
			
			<article class="container_12">
				
				<!--aside class="grid_7">
				<img class="imac" src="./js/imac.png">
				</aside-->
				
				<div class="grid_5">
					<h1><b>Design House</h1></b>
								
					<p>DesignHouse is the designing section of Melange only for members. Desgin house Contents all the equiment a user needs to build his/her website.<br>It has simplistic UI with hassle free work area, where user can focus on entirely the looks</br>without taking care of coding issues
					</br>Though Its still in alpha phase , you can appreciate the the intent of this app. <br>GO CREATIVE !!</p>
					
					<a href="design-room.php">Aplha preview of Design House</a>
					<br>
					</div>
				
				
			</article>
			<div class="clear"></div>
			
		</section>
		
		
		<section class="myphotoblog" style="width: 1263px; ">
			
			<article class="container_12">
				
				<!--aside class="grid_9">
				<figure>
					<img class="meandtiff" src="./js/photoblog_1.png">
					<img class="coverpic" src="./js/photoblog_2.png">
				</figure>
				</aside-->
				
				<div class="grid_3">
					<h1>Resources</h1>
								
					<p>PHP SDK</p>
					<a >Demo form</a>
					<p>Javascript form Validation</p>
					<a >Demo validation</a>
					<p>Template desigining</p>
					<a >Demo Templates</a>
					
				</div>
				<aside class="grid_6">
				<img class="poster" src="./images/resource.png" width="300px" height="350px" id="ricon">
				</aside>
				
			</article>
			<div class="clear"></div>
			
		</section>
		
		<!--the last section of slider-->
		<section class="menuslide" style="width: 1263px; ">
		
			<article class="container_12">
				
				<!--a  class="grid_4"><span class="icon portfolio"></span>portfolio<span>the best of the best Templates</span></a-->
				<a  class="grid_4" href="sorry.html" ><span class="grid3logo" id="resourceicon"></span>resources<span>high quality resources for you!</span></a>
				<a  class="grid_4" href="http://cyberslicks.wikidot.com" target="_blank"><span class="grid3logo" id="wikiicon"></span>Wiki<span>Official wiki of melange</span></a>
				<div class="clear"></div>
				
				<!--a  class="grid_4"><span class="icon experiments"></span>Demo<span>Themes,login, navigation bar, validation</span></a-->
				<a  class="grid_4" href="sorry.html"><span class="grid3logo" id="abouticon"></span>about<span>About Melange</span></a>
				<a  class="grid_4" href="sorry.html" ><span class="grid3logo" id="contacticon"></span>Contact<span>Got Question?? contact us</span></a>
				
				
				<div class="clear"></div>
				
				<a  class="grid_3" href="https://www.facebook.com/TheHarshSketches" target="_blank"><span class="grid4logo" id="fbicon" ></span>Facebook</a>
				<a  class="grid_3" href="http://twitter.com"target="_blank"><span class="grid4logo" id="twittericon"></span>twitter</a>
				<a  class="grid_3" href="http://cyberslicks.wordpress.com"target="_blank"><span class="grid4logo" id="blogicon"></span>Blog</a>
				<a  class="grid_3" href="https://github.com/cyberslicks/Melange" target="_blank"><span class="grid4logo" id="giticon"></span>Github</a>
				<div class="clear"></div>
							
				
			</article>
			
		</section>
		
		</div>
		
		<div class="container_12 home_nav">
			<nav class="grid_12">
				<button class="left sides"></button>
				<button class="slider_one direct selected"></button>
				<button class="slider_two direct"></button>
				<button class="slider_three direct"></button>
				<button class="slider_four direct"></button>
				<button class="slider_five direct"></button>
				<button class="right sides"></button>
			</nav>
			<div class="clear"></div>
		</div>
	
	<!--slider finish-->
	
	
	
	<!--Metro tiles begin here-->
	<div class="page secondary"><!--division responsible for mansory css-->
        <div class="page-region">
            <div class="page-region-content">
                 <div class="tiles clearfix">
				 <a href="sorry.html">
                    <div class="tile double-vertical" id="tile1">
					
						 <p id="dhome"> Design House </p>
						<h5 id="creat">
						The creativity zone of Melange which helps you build your own website.</h5>
                        <div >
                            <img src="./images/designicon1.png" id="designicon">
                        </div>
                        <!--div class="brand"> <!--the brand name>
                            <span class="name">Calendar</span>
                        </div-->
                    </div>
					</a>

					<a href="sorry.html">
                    <div class="tile selected" id="tile2">
                        <b class="check"></b>
                        <div class="tile-content icon">
                            <img src="./images/codeicon.png">
                        </div>
                       <h5 id="codep"> Code Preview</h5>
                    </div>
					</a>

					<a href="sorry.html">
                    <div class="tile selected" id="tile3" >
                        <div class="tile-content icon">
                            <img src="./images/showcase.png" id="showcase">
                        </div>
                        
                    </div>
					</a>

                    <a href="sorry.html">
					<div class="tile double" id="tile4">
                        <div class="tile-content">
                            
                            <p id="downhead">
                                Downloads
                                </p>
								<div class="tile-content icon">
                            <img src="./images/download.png" id="download">
								<div id="down">
                           	<li> PHP form</li>							
                            <li> javascript validations</li>
							<li> Navigation bar </li>
							<li> prebuilt templates and etc</li>
							</p></div>
							
                        </div>
                        </div>
                    </div>
					</a>
					
					
					<a href="sorry.html">
					<div class="tile double" id="tile5">
                        <div class="tile-content">
                            <p id="downhead">Resources</p>
                           
							
                            <p id="res">
							 Web development in parts<br>
                                Create speciic part of code using different tools.
                            </p>
							
                        </div>
                     </div>
					</a>
					
					<a href="feedback.html">
					<div class="tile bottom" id="tile6">
					<h2 id="codep">
					Code Preview
					</h2>
                        <div class="tile-content icon">
                            <img src="./images/feedback.png" id="codeicon">
                        </div>
                        <h2 id="feedp"> Feedback </h2>
                    </div>
                    </a>
					
					
					
					<a href="sorry.html">
                    <div class="tile" id="tile7">
				
					
                      <img src="./images/diary.png" id="signup">
					  <h2 id="signupt"> Sign Up here !!</h2>
					 
                    </div>
					</a>
                    

                    
					<!--tile declaration ends here-->
					
                </div>
             </div>
          </div>
       </div>
	   
	   
	   <!--metro tiles end-->
	   
	   <!--login box-->
	   
	   <div id="loginbox">
			<p style="font-size:1.2em;font-weight:bold;color:black;">Login Room</p>
	   <?php
			
			//if(!(isset($_SESSION['logged_in']) && ($_SESSION['logged_in']==1))) :
			if(!($oAuth->isLoggedIn() == 1)&& !(isset($_SESSION['logged_in'])))
			{
			echo "</br>";
			echo "<a href=\"".$oAuth->getFacebookLoginUrl()."\"><img src=\"./images/fb.png\"></a>";
			echo "</br></br>";
			echo "<a href=\"".$oAuth->getGoogleLoginUrl()."\"><img src=\"./images/google.png\"></a>";
			echo "</br></br>";
	        echo "<a href=\"login.php\"><span class=\"CSSButton\">Melange Login</span></a>";
			}
			else
			{ 
			if(isset($_SESSION['oauth_vendor']) && (($_SESSION['oauth_vendor']=='facebook') || ($_SESSION['oauth_vendor']=='google')))
			{
			$userData = $oAuth->getUserData();
			echo "</br>";
			echo "<img  src=\"".$userData['img']."\  width=\"30px\" height=\"30px\" style=\"margin-left:1px; top:10px;\">";
			echo "&nbsp";}
			
			echo "<span style=\"colour:#488bf5;\">Welcome "  .$_SESSION['user_name'] . "</span>";
			echo "</br></br>";
			echo "<p style=\"color:green;\"> You can now  access our Design-Room page for Alpha preview.</p>";
			echo "</br>";
			echo " <a href=\"design-room.php\"><input type=\"button\" class=\"o-awesome\" value=\"Design-Room\"/></a></span>";
			}
			
			
			?>
	   
		</div>
	
	
	
	<div class="clear"></div>

<!--div class="footer_wrapp">
<div class="footer_details"></div>

<footer class="container_12"-->
<!--Footer starts here-->

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