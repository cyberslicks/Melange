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
<link rel="stylesheet" href="./css/extra.css">
<link rel="stylesheet" href="./css/form.css">
<link rel="stylesheet" href="./css/passchk.css">


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
<div style="height:1020px;width:100%;background:white;">

<div id="div1">
<div id="hea"><p style="margin-top:5px;position:absolute;margin-left:160px;">Create a New Melange Account</p></div>
<form  name="signupform" id="sign" action="register.php" onsubmit="return allval()" method="post" >
</br>
<b><p id="forall" >Name</p></b></br>
<input type="text" placeholder="First" name="first" id="field" size="15"  onblur="fname()"  value="<?php if (isset($_POST['first'])) echo $_POST['first']; ?>"/>
<input type="text" placeholder="Last" name="last" id="field1" onblur="lname()" value="<?php if (isset($_POST['last'])) echo $_POST['last']; ?>"/>
<p id="demo"></p></br>
<p id="forall">Choose your username</p><br/>
<input type="text"  name="username" size="25px" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="varun.malhotra" id="field2" onblur="uname()" onkeyup="showCustomer(this.value)"/>@melange.com<br/>
<div id="im"></div><p id="demo2" style="margin-left:29px;margin-top:-20px;position:absolute;"></p>
</br>
<p id="forall">Create a password</p><br/>
<input type="password" name="pass1" id="field3" onblur="passw1()" onkeypress="passwordStrength(this.value,document.getElementById('field3'))"/> 
<p id="demo3"></p>
<br/>
<p id="forall">Confirm your password</p><br/>
<input type="password" name="pass2" id="field4" onblur="passw2()"/>
<p id="demo4"></p>
<br/></br>
<p id="forall">Birthday</p><br/>
<select name="month" placeholder="Month" id="forall" onblur="chkmon()">
<option value="January" selected="selected">January</option>
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

</select>
<input type="text" placeholder="Day" name="day" style="margin-left:145px;" value="<?php if (isset($_POST['day'])) echo $_POST['day']; ?>" size="4"  id="field5" onblur="chkday()" />
<input type="text" placeholder="Year" name="year" style="margin-left:10px;" value="<?php if (isset($_POST['year'])) echo $_POST['year']; ?>" id="field6" size="4" onblur="chkyear()" />
<p id="demo5"></p>
<br/></br>
<p id="forall">Gender</p><br/>
<select id="forall" name="gender" onblur="chkgen()">
<option value="Male" selected="selected">Male</option>
<option value="Female">Female</option>

</select>
</br></br>
<label for="txtInput" id="forall">Security Code Verification: </label></br>
<input type="text" id="txtCaptcha" 
            style="background-image:url(1.jpg); text-align:center; border:none;
            font-weight:bold; font-family:Modern,font-size:1.5em;font-family:Helvetica;margin-left:10px;" />
        <input type="button" style="margin-left:20px;" id="btnrefresh" class="awesome" value="Refresh" onclick="DrawCaptcha();" /></br></br>
  
		<input id="txtInput" name="txtInput" type="text"  style="margin-left:10px;" onblur="chkcap()"/>
<p id="demo7"></p>
		
		
<br/><br/>
<input type="checkbox" name="tc" value="tc" id="field"  />  I agree to the Melange <a href="#">Terms of service</a> and <a href="#">Privacy Policy</a>
</br></br></br><input type="submit" value="Submit"  class="awesome" id="btnrefresh" style="margin-left:10px;" />

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