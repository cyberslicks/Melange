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
	<script src="signup.js"></script>
	
	
	<!--link rel="stylesheet" type="text/css" href="./styles/propertybox.css"/-->
	
	<link href="./css/modern.css" rel="stylesheet">
	<link href="./css/header.css" rel="stylesheet">
	
	
	
	


<!-- CCS globals -->
<link rel="stylesheet" href="./css/global.css">


<!-- css home -->
<link rel="stylesheet" href="./css/style.css">






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


<script typ="text/javascript">
function showCustomer(str)
{
var xmlhttp;    
if (str=='')
  {
  document.getElementById("demo2").innerHTML="";
  //alert("l");
  return 1;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.onreadystatechange=function()
  {//alert("2");
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {//alert("3");
	document.getElementById("demo2").style.color="#ff7f81";
    document.getElementById("demo2").innerHTML=xmlhttp.responseText;
    var c=document.getElementById("demo2").innerHTML;
	if(c=="Available")
	{document.getElementById("im").style.background="url(images/ok-icon.png)";
	  return 0;
	}
	else if(c!="Available")
	document.getElementById("im").style.background="url(images/no.png)";
	return 1;}
  }
xmlhttp.open("GET","useravail.php?username="+str,true);
xmlhttp.send();


}
</script>

<style>



#main-footer {
	
	clear:both;
	width:100%;
	float:left;
	
background: black;
	
}

#footer-wrap {
	
	
	position:absolute;
		margin-top:900;
		margin-left:150px;
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
#hea{
background:rgb(233,241,250);
width:100%;
height:130px;
margin-top:0px;
margin-left:0px;
}
#bel{
background:rgb(149,183,220);
width:100%;
height:1200px;
margin-top:0px;
margin-left:0px;
}
			#text{
			position:absolute;
			margin-top:20px;
			color:white;
			margin-left:20px;
			}

#div1
{

width:700px;
height:920px;
background:rgb(245,245,247);
margin-bottom:20px;
margin-left:330px;
margin-top:20px;
opacity:1.0;
color:rgb(53,54,57);
position:absolute;
/*border-radius:7px;

box-shadow: 4px 0px 15px 5px #000000;
*/}	
#head{
width:500px;
height:50px;
background:rgb(38,38,38);
/*background: #7ebef3;*/
color:#fefefe;
/*border: 1px;
border-radius:4px;
border-bottom-right-radius:0px;
border-bottom-left-radius:0px;
border-shadow:2px 3px 3px #425564;*/

}
.awesome{
background: #222 url(/images/alert-overlay.png) repeat-x;
display: inline-block;
padding: 5px 10px 6px;
color: #fff;
text-decoration: none;
font-weight: bold;
line-height: 1;
-moz-border-radius: 5px;
-webkit-border-radius: 2px ;
-moz-box-shadow: 0 1px 3px #999;
-webkit-box-shadow: 0 1px 3px #999;
text-shadow: 0 -1px 1px #222;
border-bottom: 1px solid #222;
position: relative;
cursor: pointer;

-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-bottom: 1px solid rgba(0,0,0,0.25);


}
#forall{
position:absolute;
margin-left:10px;
font-family:Century Gothic,Sans-Serif;
font-weight:bold;

}
#mst{
width:800px;
height:0%;
background:red;
}
input[type="text"]
{
width:150px;
height:23px;
}
#header
{
margin-left:0px;
margin-top:0px;
width:99.7%;
height:70px;
background:rgb(240,240,240);
color:white;

opacity:0.8;
border:2px solid;
border-color:black;
}
#again{
width:100px;
height:40px;
background:#00bbef;
color:white;
position:absolute;
margin-left:1100px;
margin-top:15px;
position:absolute;
}
#again:hover{
background:#00aadf;
}
#field,#field1,#field2,#field3,#field4
{
position:relative;
margin-left:10px;
outline:none;

}

#field:hover,#field1:hover,#field2:hover,#field4:hover,#field5:hover,#field6:hover
{
background:#DDE5FF;
border :2px solid #00ff00;/*#7094FF;*/

outline:none;
}
#field3:hover{
border :2px solid #7094FF;
}
#demo,#demo2,#demo3,#demo4,#demo5,#demo7
{
margin-left:10px;
font-weight:bold;
font-family:Helvetica;
}
#txtCaptcha{
	height:50px;
	font-size:1.4em;
	}
#btnrefresh1 {
	font-family: 'PT Sans', arial, serif;
	color:#ffffff;
	text-align:center;
	font-size:16px;
	font-weight:bold;
	padding:5px;
	
	text-shadow: /* Simulating Text Stroke */
        -1px -1px 0 #000, 
        1px -1px 0 #000, 
        -1px 1px 0 #000, 
        1px 1px 0 #000;
	
	border: 1px solid rgba(0,0,0,0.5);
	border-bottom: 3px solid rgba(0,0,0,0.5);
	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	
	background: #7ebef3;

    -o-box-shadow: 
        0 2px 8px rgba(0,0,0,0.5),
        inset 0 1px rgba(255,255,255,0.3),
        inset 0 10px rgba(255,255,255,0.2),
        inset 0 10px 20px rgba(255,255,255,0.25),
        inset 0 -15px 30px rgba(0,0,0,0.3);

    -webkit-box-shadow: 
        0 2px 8px rgba(0,0,0,0.5),
        inset 0 1px rgba(255,255,255,0.3),
        inset 0 10px rgba(255,255,255,0.2),
        inset 0 10px 20px rgba(255,255,255,0.25),
        inset 0 -15px 30px rgba(0,0,0,0.3);

    -moz-box-shadow:
        0 2px 8px rgba(0,0,0,0.5),
        inset 0 1px rgba(255,255,255,0.3),
        inset 0 10px rgba(255,255,255,0.2),
        inset 0 10px 20px rgba(255,255,255,0.25),
        inset 0 -15px 30px rgba(0,0,0,0.3);
	
	box-shadow: 
        0 2px 8px rgba(0,0,0,0.5), /* Exterior Shadow */
        inset 0 1px rgba(255,255,255,0.3), /* Top light Line */
        inset 0 10px rgba(255,255,255,0.2), /* Top Light Shadow */
        inset 0 10px 20px rgba(255,255,255,0.25), /* Sides Light Shadow */
        inset 0 -15px 30px rgba(0,0,0,0.3); /* Dark Background */

	margin: 20px;
	opacity:1.0;
	display: inline-block;
	text-decoration: none;
}

	#im
{
margin-left:5px;
width:25px;
height:25px;
}
</style>

</head>
<body onload="DrawCaptcha()">
<div class="header">

		<div class="headertile"id="heading">
		<h1 class="heading" ><B>
		Home</h1>
		</div>
		<div class="headertile">
		<h1 class="heading">
		About</h1>
		</div>
		<div class="headertile">
		<h1 class="heading">
		Contact</h1>
		</div>
		<div class="headertile">
		<h1 class="heading">
		Blog </h1>
		</div>
		
		
</div>
<div style="height:1000px;width:100%;background:white;">
<div id="div1">
<form  name="signupform" id="sign" action="register.php" onsubmit="return allval()" method="post" >
</br>
<b><p id="forall" >Name*</p></b></br>
<input type="text" placeholder="First" name="first" id="field" size="15"  onblur="fname()"  value="<?php if (isset($_POST['first'])) echo $_POST['first']; ?>"/>
<input type="text" placeholder="Last" name="last" id="field1" onblur="lname()" value="<?php if (isset($_POST['last'])) echo $_POST['last']; ?>"/>
<p id="demo"></p></br>
<p id="forall">Choose your username</p><br/>
<input type="text"  name="username" size="25px" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="varun.malhotra" id="field2" onblur="uname()" onkeyup="showCustomer(this.value)"/>@melange.com<br/>
<div id="im"></div><p id="demo2" style="margin-left:29px;margin-top:-20px;position:absolute;"></p>
</br>
<p id="forall">Create a password</p><br/>
<input type="password" name="pass1" id="field3" onblur="passw1()" onkeypress="passwordStrength(this.value,document.getElementById('field3'))"/> <div id="im"></div>
<div id="demo3"></div>
<br/>
<p id="forall">Confirm your password</p><br/>
<input type="password" name="pass2" id="field4" onblur="passw2()"/>
<p id="demo4"></p>
<br/></br>
<p id="forall">Birthday</p><br/>
<select name="month" placeholder="Month" id="forall" onblur="chkmon()">
<option value="January">January</option>
<option value="Febraury">Febraury</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
<option value="" selected="selected">Month</option>
</select>
<input type="text" placeholder="Day" name="day" style="margin-left:115px;" value="<?php if (isset($_POST['day'])) echo $_POST['day']; ?>" size="4"  id="field5" onblur="chkday()" />
<input type="text" placeholder="Year" name="year" style="margin-left:10px;" value="<?php if (isset($_POST['year'])) echo $_POST['year']; ?>" id="field6" size="4" onblur="chkyear()" />
<p id="demo5"></p>
<br/></br>
<p id="forall">Gender</p><br/>
<select id="forall" name="gender" onblur="chkgen()">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="" selected="selected">I'm</option>
</select>
</br></br>
<label for="txtInput" id="forall">Security Code Verification: </label></br>
<input type="text" id="txtCaptcha" 
            style="background-image:url(1.jpg); text-align:center; border:none;
            font-weight:bold; font-family:Modern,font-size:1.5em;font-family:Helvetica;margin-left:10px;" />
        <input type="button" id="btnrefresh" class="awesome" value="Refresh" onclick="DrawCaptcha();" /></br></br>
  
		<input id="txtInput" name="txtInput" type="text"  style="margin-left:10px;" onblur="chkcap()"/>
<p id="demo7"></p>
		
		
<br/><br/>
<input type="checkbox" name="tc" value="tc" id="field"  />  I agree to the Melange <a href="#">Terms of service</a> and <a href="#">Privacy Policy</a>
</br><input type="submit" value="Submit"  class="awesome" id="btnrefresh" style="margin-left:10px;" />

</form>
</div>
</div>
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


	
</body>
</html>