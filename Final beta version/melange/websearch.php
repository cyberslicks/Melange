<html>
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

<p><div id="center"><br>
						Search Resources on web
		<script>
		function change(){
			var el1 = document.getElementById("tagline");
			var el2 = document.getElementById("text");
			el1.innerHTML = el2.value;
				}
		</script>

<form onsubmit="websearch.php" method="get">
<center>
		<input type="text" id="text" onkeyup="change()" name="tagin" autofocus="autofocus">
		<button type="submit" value="submit"> Search
		</button>
		</form></center>
		<div id="tagline"> </div><br>
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
		  
		  
		  
		  
		  function crawl_between($data, $start, $end){
				$data = stristr($data, $start); // Stripping all data from before $start
				$data = substr($data, strlen($start));  // Stripping $start
				$stop = stripos($data, $end);   // Getting the position of the $end of the data to crawl
				$data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to crawl
				return $data;   // Returning the crawld data from the function
			}
		  
		  ///$answer=crawl_between($data1,$start,$end);
		   
		 
			
			if(isset($_GET["tagin"]))
				$tag=$_GET["tagin"];
				else
				$tag="";
			
			$w3add="http://www.google.com/search?sitesearch=www.w3schools.com&as_q=";
			$url=$w3add.$tag;
			
			 // Assigning the URL we want to crawl to the variable $url
		 
			$results_page = curl($url); // Downloading the results page using our curl() funtion
			 
			$results_page = crawl_between($results_page, "<div id=\"center_col\">", "<div id=\"foot\">"); // Scraping out only the middle section of the results page that contains our results
			 
			//$separate_results = explode("<td class=\"image\">", $results_page);   // Expploding the results into separate parts into an array
				 
		   
			echo "W3 Schools";
			print_r($results_page); // Printing out our array of URLs we've just crawld
		  
		  ?>

		


		<div id="tjssresults">
		<?php
			$jssadd="http://www.javascriptsource.com/search?q=";
			$url3=$jssadd.$tag;
			
			 // Assigning the URL we want to crawl to the variable $url
		 
			$results_page3 = curl($url3); // Downloading the results page using our curl() funtion
			 
			$results_page3 = crawl_between($results_page3, "<div id=\"search_result_body\">", "<div id=\"search_pagination\">"); // Scraping out only the middle section of the results page that contains our results
			 
			
				 
		   
			echo "The Javascript Source"."<br/>";
			
				if(strlen($results_page3)=='24')
				{
				echo "No results Found";
				}
			print_r($results_page3); // Printing out our array of URLs we've just crawld
			


			
		  ?>

		</p>
			</div>
			</div>
<style>	
	

#tjssresults
{
position:relative;

width:50%;
float:left;
height:500px;
overflow:scroll;

}
#w3results{width:50%;
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
width:100%
font-size:14;
background-color:white;

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



</section>


 
</footer>



</body>
</html>
