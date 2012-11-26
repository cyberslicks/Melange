
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
	
	
	<title>Melange: Html formatter</title>
	
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

<title>beautify</title>
<link rel="stylesheet" type="text/css" href="./themes/theme.css">
<script src="./js/rainbow.js"></script>
<script src="./js/html.js"></script>
<script src="./js/generic.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/clean.js"></script>
<script src="./js/css-engine.js"></script>
<script>

 $(document).ready(function() {
 
 
	 $('#output').hide();
	
 
$('#click').click($.proxy(function(){
	
	
	var x = $('#inp').val();
	$("#op").remove();
	if($('#temp_div'))
	$('#temp_div').remove();
	
var c = htmlencode($.htmlClean(x, {format:true ,bodyOnly:false ,  allowedAttributes: [
                    ["width"],["id"],["class"],["type"],["name"],["width"],["height"],["src"],["href"]],allowedClasses : ["*"] }));



var div = document.createElement('div');
div.id="temp_div";
div.innerHTML = '<pre style="overflow:scroll;white-space:pre-wrap;"><code data-language="html">'+c+'</code></pre>';
Rainbow.color(div, function() {
    document.getElementById('output').appendChild(div);
});


$('#output').fadeIn(2000);

},document));

 
 });
 
function htmlencode(str) {
    return str.replace(/[&<>"']/g, function($0) {
        return "&" + {"&":"amp", "<":"lt", ">":"gt", '"':"quot", "'":"#39"}[$0] + ";";
    });
}
</script>
<style>
#inp {
	
	margin-left:380px;
	margin-top:30px;
	
	padding-left:38px;
	padding-top:9px;
	background : url(./images/bgrid.jpg);
	font-size:0.9em;
	line-height:1em;
	outline:none;
	font-family:courier;
	color:white;
	
	
}



.bawesome{

display: inline-block;
padding: 5px 10px 6px;
color: #fff;
text-decoration: none;
font-weight: bold;
line-height: 1;


text-shadow: 0 -1px 1px #222;

position: relative;
cursor: pointer;
background-color: #2bbff4;

-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-bottom: 1px solid rgba(0,0,0,0.25);

}


#inside{
background-color:white;
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

<div id="inside">





<div id="output"></div>


</code></pre>

</br>
</br>
<tt><textarea rows="30" cols="60" id="inp"></textarea></tt>
</br>
</br>
<center><button id="click" class="bawesome">beautify</button></center>
</br>
</br>

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




</html>