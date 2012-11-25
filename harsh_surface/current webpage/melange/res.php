<!doctype html>
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
div.innerHTML = '<pre><code data-language="html">'+c+'</code></pre>';
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
	
	padding-left:98px;
	padding-top:9px;
	background : url(./images/paper2.jpg);
	font-size:0.9em;
	line-height:1.7em;
	outline:none;
	font-family:Times;
	
	
	
}



</style>


	
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

	<link rel="stylesheet" type="text/css" href="./styles/button-gen.css">
<link rel="stylesheet" href="./styles/jquery.gradientPicker.css" type="text/css" />
<!--<link rel="stylesheet" href="./vendor/jqPlugins/colorpicker/css/colorpicker.css" type="text/css" /> -->
<link rel="stylesheet" href="./styles/colorpicker_1.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="./themes/blackboard.css">

	<script src="./js/rainbow.js"></script>
	<script src="./js/css.js"></script>
	<script src="./js/generic.js"></script>

	<script src="./js/jquery-1.7.js"></script> 
	<script src="./js/jqueryUI-custom.js"></script>
	<script src="./js/colorpicker.js"></script>
	<script src="./js/jquery.gradientPicker.js"></script>


	
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
 <link rel="stylesheet" href="./js/jquery-ui.css" />
    <script src="./js/jquery-1.8.2.js"></script>
    <script src="./js/jquery-ui.js"></script>
    
    <script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>
	
	
	<script>

$(document).ready(function() {


	$('#code').click(function() {
	
		var css_text = 'padding-top : '+button_css.padding_top+';'+'\npadding-bottom :'+button_css.padding_bottom+';'+'\npadding-left :'+button_css.padding_left+';';
		css_text = css_text+'\npadding-right :'+button_css.padding_right+';'+'\ncolor :'+button_css.color+';'+'\nbackground_image :'+button_css.background_image+';';
		css_text = css_text+'\nborder-radius :'+button_css.border_radius+';'+'\nfont-size :'+button_css.font_size+';'+'\nfont-family :'+button_css.font_family+';';
		css_text = css_text+'\nborder-color :'+button_css.border_color+';'+'\nborder-style :'+button_css.border_style+';'+'\nborder-width :'+button_css.border_width+';';
	
		if($('#temp_div'))
		$('#temp_div').remove();
	
		var div = document.createElement('div');
		div.id="temp_div";
		div.innerHTML = '<pre><code data-language="css">'+css_text+'</code></pre>';
		Rainbow.color(div, function() {
		document.getElementById('output').appendChild(div);
});
	
	
    	
        $('.modal-profile').fadeIn("slow");
        $('.modal-lightsout').fadeTo("slow", .9);
    });
 
    $('a.modal-close-profile, .modal-lightsout').click(function() {
        $('.modal-profile').fadeOut("slow");
        $('.modal-lightsout').fadeOut("slow");
    });

	
	
	
	
	
	var $button = $("#sample");
	
	$("#ex1").gradientPicker({
				change: function(points, styles) {
					for (i = 1; i < styles.length; ++i) {
						$button.css("background-image", styles[i]);
						button_css.background_image = styles[i];
						
					}
				},
				fillDirection: "45deg",
				controlPoints: ["white 0%",  "#888888 100%"]
			});
			
			
			
			
			$('#color').ColorPicker({
	        color: '#000000',
	        onShow: function (colpkr) {
	            $(colpkr).fadeIn(500);
	            return false;
	        },
	        onHide: function (colpkr) {
	            $(colpkr).fadeOut(500);
	            return false;
	        },
	        onChange: function (hsb, hex, rgb) {
	            $('#color').css('background-color', '#' + hex);
				document.getElementById("sample").style.color='#'+hex;
				button_css.color = '#'+hex;	        
	        
	        
	        }
	    });

	    $('#border-color').ColorPicker({
	        color: '#000000',
	        onShow: function (colpkr) {
	            $(colpkr).fadeIn(500);
	            return false;
	        },
	        onHide: function (colpkr) {
	            $(colpkr).fadeOut(500);
	            return false;
	        },
	        onChange: function (hsb, hex, rgb) {
	            $('#border-color').css('background-color', '#' + hex);
				document.getElementById("sample").style.borderColor='#'+hex;
				button_css.border_color = '#'+hex;
					        
	        
	        
	        }
	    });

	    
	    

	    
	    document.getElementById("pdtb").onchange = $.proxy(function(){ 
		    
		    
		    var val = document.getElementById('pdtb').value;
		 
		    $('#sample').css("padding-top",val+'px');
		    $('#sample').css("padding-bottom",val+'px');
		    
		    button_css.padding_top = val+'px';
		    button_css.padding_bottom = val+'px';
		    		    
		    
		    
	    },document);

			
	   document.getElementById("pdlr").onchange = $.proxy(function(){ 
		    
		    var val = document.getElementById('pdlr').value;
		    $('#sample').css("padding-left",val+'px');
		    $('#sample').css("padding-right",val+'px');
		    
		    button_css.padding_left = val+'px';
		    button_css.padding_right = val+'px';
		    
		    
		    
	    },document);	
	    
	    
	     document.getElementById("ftb").onchange = $.proxy(function(){ 
		    
		    var val = document.getElementById('ftb').value;
		    $('#sample').css("font-size",val+'px');
		    
		    
		    button_css.font_size = val+'px';
		
		    
		    
		    
	    },document);	
	    
	    document.getElementById("br").onchange = $.proxy(function(){ 
		    
		    var val = document.getElementById('br').value;
		    $('#sample').css("border-radius",val+'px');
		    
		    
		    button_css.border_radius = val+'px';
		
		    
		    
		    
	    },document);	
			
			

	     document.getElementById("tsub").onclick = $.proxy(function(){ 
		    
		    var val = document.getElementById('text').value;
		    $('#sample').text(val);
		    
		    
		    		
		    
		    
		    
	    },document);	
	    
	    
	    
	    document.getElementById("ffsub").onclick = $.proxy(function(){ 
		    
		    var font1 = document.getElementById("font-face"); // or in jQuery use: select = this;
		var FontFace = font1.options[font1.selectedIndex].text;
		document.getElementById('sample').style.fontFamily=FontFace;
		    
		    $('#sample').text(val);
		    button_css.font_family = FontFace;
		    
		    		
		    
		    
		    
	    },document);	
	    
	    
	    document.getElementById("bssub").onclick = $.proxy(function(){ 
		    
		    var bor = document.getElementById("border-style"); // or in jQuery use: select = this;
		var borstyle = bor.options[bor.selectedIndex].text;
		document.getElementById('sample').style.borderStyle=borstyle;
		    
		    $('#sample').text(val);
		    button_css.border_style = borstyle;
		    
		    		
		    
		    
		    
	    },document);	
	    
	    
	    
	    
	    document.getElementById("bw").onchange = $.proxy(function(){ 
		    
		    
		    var val = document.getElementById('bw').value;
		 
		    $('#sample').css("border-width",val+'px');
		    
		    
		    button_css.border_width = val+'px';
		  
		    
		    
	    },document);
	    
	    
	   
	    

	
	
	
});



var button_css = {
	
			padding_top:'10px',
			padding_bottom:'10px',
			color:'black',
			background_image : 'none',
			padding_left: '10px',
			padding_right : '10px',
			border_radius : '0px',
			font_family : 'tahoma',
			font_size : '12px',
			border_color : 'black',
			border_style : 'none',
			border_width : '0px'
			
	
	
	
};

</script>

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

<div id="center3">
 
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Button Generator</a></li>
				<li><a href="#tabs-4">HTML formatter</a></li>
				<li><a href="#tabs-2">Search On Web</a></li>
				<li><a href="#tabs-3">XXX</a></li>
			</ul>
			<div id="tabs-1">
				
			<div class="modal-profile">
<h2>CSS</h2>
    <a class="modal-close-profile" title="Close profile window" href="#"><img src="./images/close.png" alt="Close profile window" /></a>
     <div id="output">
     
     
     </div>
  
    </div>
    
    
    <div class="modal-lightsout"></div>





<aside id="panel-left">


<div class="tool">
<heading>style &nbsp;<span>border</span></heading>
</br>
<select id="border-style">
				
				<option>none</option>
				<option>hidden</option>
				<option>dotted</option>
				<option>dashed</option>
				<option>solid</option>
				<option>double</option>
				<option>groove</option>
				<option>ridge</option>
				<option>inset</option>
				<option>outset</option>
				</select>
				
<button id="bssub" class="awesome">update</button>
				

</div>

</br>


<div class="tool">
<heading>width &nbsp;<span>border</span></heading>
</br>
<input type="range" id="bw" min="1" max="30" width="200px" value="0">


</div>

</br>
<div class="tool">
<heading>Padding &nbsp;<span>top+bottom</span></heading>
</br>
<input type="range" id="pdtb" min="1" max="80" width="200px" value="10">


</div>

</br>

<div class="tool">
<heading>Padding &nbsp;<span>left+right</span></heading>
</br>
<input type="range" id="pdlr" min="1" max="80" width="200px" value="10">


</div>


</br>
<div class="tool">
<heading>size &nbsp;<span>font</span></heading>
</br>
<input type="range" id="ftb" min="2" max="25" width="200px" value="12">


</div>



</br>


<div class="tool">
<heading>radius &nbsp;<span>border</span></heading>
</br>
<input type="range" id="br" min="1" max="30" width="200px" value="0">


</div>





</aside>
<aside id="panel-right">



</br>


<div class="tool">
<heading>Color &nbsp;<span>Font</span></heading>
</br>
<input type="button" id="color" style="background-color:#000000; border:thin solid white;height:50px;width:50px;margin-left:5px;">


</div>


</br>


<div class="tool">
<heading>background &nbsp;<span>button</span></heading>
</br>
<div class="grad_ex" id="ex1"></div>
</div>




</br>


<div class="tool">
<heading>text &nbsp;<span>button</span></heading>
</br>
<input type="input" id="text" style="background-color:#000000; border:thin solid white;margin-left:5px;color:white;outline:none;height:15px;width:150px;">
<button id="tsub" class="awesome">update</button>

</div>

</br>


<div class="tool">
<heading>family &nbsp;<span>font</span></heading>
</br>

<select id="font-face">
				<option>tahoma</option>
				<option>lucida</option>
				<option>arial black</option>
				<option>sans-serif</option>
				<option>impact</option>
</select>



<button id="ffsub" class="awesome">update</button>

</div>

</br>


<div class="tool">
<heading>Color &nbsp;<span>border</span></heading>
</br>
<input type="button" id="border-color" style="background-color:#000000; border:thin solid white;height:50px;width:50px;margin-left:5px;">


</div>

</br>




</aside>

<section id="preview">
<center> <button id="sample">button</button></center>

</section>
<br>
</br>
<center><button id="code" class="bawesome" style="margin-left:280px;">generate-code</button></center>
			
			
			
			
			</div>
			<div id="tabs-2">
				<p><div id="center">
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

		</p>
			</div>
			</div>
			
			<div id="tabs-3">
				<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
				<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
			</div>
			
			<div id="tabs-4">
				<div id="output"></div>


</code></pre>

</br>
</br>
<tt><textarea rows="20" cols="50" id="inp"></textarea></tt>
</br>
</br>
<center><button id="click">beautify</button></center>
</br>
</br>

				
				</div>
		</div>
 
</div>
</div>

<style>
#center3
{
background-color:white;
}

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
width:100%
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

</style>
 
</body>
</html>