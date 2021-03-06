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
	
	
	<title>Melange: Resources</title>
	
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
<br>
<div id="center">
<h2 id="h"><center> Resources</h2>
<br>
Search Resources on web

<script>
function change(){
    var el1 = document.getElementById("tagline");
    var el2 = document.getElementById("text");
    el1.innerHTML = el2.value;
		}
</script>



<input type="text" id="text" onkeypress="change()">
<div id="tagline"></div>
<div id="w3results">
<?php
    // Defining the basic cURL function
    function curl($url) {
        // Assigning cURL options to an array
        $options = Array(
            CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
            CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
            CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
            CURLOPT_CONNECTTIMEOUT => 120,   // Setting the amount of time (in seconds) before the request times out
            CURLOPT_TIMEOUT => 120,  // Setting the maximum amount of time for cURL to execute queries
            CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
            CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
            CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
        );
         
        $ch = curl_init();  // Initialising cURL 
        curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL 
        return $data;   // Returning the data from the function 
    }
  
  
  
  
  function scrape_between($data, $start, $end){
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }
  
  ///$answer=scrape_between($data1,$start,$end);
   
 
	$tag="style";
    $w3add="http://www.google.com/search?sitesearch=www.w3schools.com&as_q=";
	$url=$w3add.$tag;
	
     // Assigning the URL we want to scrape to the variable $url
 
    $results_page = curl($url); // Downloading the results page using our curl() funtion
     
    $results_page = scrape_between($results_page, "<div id=\"center_col\">", "<div id=\"foot\">"); // Scraping out only the middle section of the results page that contains our results
     
    //$separate_results = explode("<td class=\"image\">", $results_page);   // Expploding the results into separate parts into an array
         
   
    echo "W3 Schools";
    print_r($results_page); // Printing out our array of URLs we've just scraped
  
  ?>

<div id="phpnetresults">
<?php
    
  //	php website search
  
  
 
    $phpadd="http://in2.php.net/manual-lookup.php?pattern=";
	
	$url2=$phpadd.$tag."&lang=en&scope=quickref";
	 
     $results_page2 = curl($url2); // Downloading the results page using our curl() funtion
  
    $results_page2 = scrape_between($results_page2, "<ul id=\"quickref_functions\">", "</ul>"); // Scraping out only the middle section of the results page that contains our results
    
    echo "PHP.NET WEBSITE";
    print_r($results_page2); // Printing out our array of URLs we've just scraped
  
  
  
  ?>

</div>


<div id="tjssresults">
<?php
    $jssadd="http://www.javascriptsource.com/search?q=";
	$url3=$jssadd.$tag;
	
     // Assigning the URL we want to scrape to the variable $url
 
    $results_page3 = curl($url3); // Downloading the results page using our curl() funtion
     
    $results_page3 = scrape_between($results_page3, "<div id=\"search_result_body\">", "<div id=\"search_pagination\">"); // Scraping out only the middle section of the results page that contains our results
     
    
         
   
    echo "The Javascript Source";
    print_r($results_page3); // Printing out our array of URLs we've just scraped
  
  ?>
</div>

</div>
</div>
</div>
</div>



<style>
#tjssresults
{
position:relative;

width:33%;
float:left;
height:500px;
overflow:scroll;

}
#w3results{width:33%;
border:1px;
float:left;
height:500px;
overflow:scroll;
}

#phpnetresults
{
position:relative;

width:33%;
float:left;
height:500px;
overflow:scroll;

}


#h{
font-size:24;
}

#center
{
height:600px;

font-size:14;
background-color:white;

}


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


