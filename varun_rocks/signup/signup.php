<!--
Sliding Boxes and Captions with JQuery
March 2009
By Sam Dunn
www.buildinternet.com / www.onemightyroar.com
-->

<html>
	<head>
		<title>Sliding Boxes and Captions with JQuery</title>
		<link rel="stylesheet" type="text/css" href="passchk.css" />
		<style type="text/css">
		
			*{ padding:0px; margin:0px; }
			
			a{ color:#C8DCE5; }
			h3{ margin: 10px 10px 0 10px; color:#FFF; font:18pt Arial, sans-serif; letter-spacing:-1px; font-weight: bold;  }
			
			.boxgrid{ 
			    margin-left:50px;
				width: 275px; 
				height: 200px; 
				
				border: 2px; 
					border-radius-8px;
					
				background:#161613; 
				border: solid 2px #8399AF; 
				overflow: hidden; 
				position: relative; 
			}
				.boxgrid img{ 
					position: absolute; 
					top: 0; 
					left: 0; 
					
				}
				.boxgrid p{ 
					padding: 0 10px; 
					color:#afafaf; 
					font-weight:bold; 
					font:10pt "Lucida Grande", Arial, sans-serif; 
				}
				
			.boxcaption{ 
				float: left; 
				position: absolute; 
				background: #000; 
				height: 100px; 
				width: 100%; 
				opacity: .8; 
				/* For IE 5-7 */
				filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
				/* For IE 8 */
				-MS-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
 			}
 				.captionfull .boxcaption {
 					top: 260;
 					left: 0;
 				}
 				.caption .boxcaption {
 					top: 220;
 					left: 0;
 				}
			#text{
			position:absolute;
			margin-top:20px;
			color:white;
			margin-left:20px;
			}

#div1
{

width:400px;
height:900px;
background:rgb(245,245,247);
margin-left:800px;
margin-top:10px;
opacity:1.0;
color:rgb(53,54,57);
border-radius:7px;
box-shadow: 4px 0px 15px 5px #000000;
}	
#head{
width:400px;
height:50px;
background:#7ebef3;
color:#fefefe;
border: 1px;
border-radius:7px;
border-bottom-right-radius:0px;
border-bottom-left-radius:0px;
border-shadow:2px 3px 3px #425564;

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
background:black;
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
background:#DDE5FF;/*#e5f2fe*/
border :2px solid #7094FF;

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
#btnrefresh {
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
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: rgba(0	,178,	238,0.8);

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
	opacity:0.9;
	display: inline-block;
	text-decoration: none;
}

		</style>
		<script type="text/javascript" src="signup.js"></script>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
				//Vertical Sliding
				$('.boxgrid.slidedown').hover(function(){
					$(".cover", this).stop().animate({top:'-260px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
				});
				//Horizontal Sliding
				$('.boxgrid.slideright').hover(function(){
					$(".cover", this).stop().animate({left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
				});
				//Diagnal Sliding
				$('.boxgrid.thecombo').hover(function(){
					$(".cover", this).stop().animate({top:'260px', left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px', left:'0px'},{queue:false,duration:300});
				});
				//Partial Sliding (Only show some of background)
				$('.boxgrid.peek').hover(function(){
					$(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
				});
				//Full Caption Sliding (Hidden to Visible)
				$('.boxgrid.captionfull').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'260px'},{queue:false,duration:160});
				});
				//Caption Sliding (Partially Hidden to Visible)
				$('.boxgrid.caption').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
				});
			});
			
			

		</script>
		
	</head>
	<body  background="img/images.jpg"  onload="DrawCaptcha()">
	
	<div id="header"><div id="text">Melange</div>
	<div id="again" align="center"><p style="margin-top:10px;">Sign Up</p></div>
	</div>
	<p style="margin-top:10px;margin-left:50px;font-weight:bold;">Create a new Melange Account</p>
	<div id="mst">
			<div class="boxgrid captionfull">
				<img src="jareck.jpg"/>
				<div class="cover boxcaption">
					<h3>Jarek Kubicki</h3>
					<p>Artist<br/><a href="http://www.nonsensesociety.com/2009/03/art-by-jarek-kubicki/" target="_BLANK">More Work</a></p>
				</div>
					
			</div>
			<div class="boxgrid caption">
				<img src="kamil.jpg"/>
				<div class="cover boxcaption">
					<h3>Kamil Smala</h3>
					<p>Artist<br/><a href="http://www.nonsensesociety.com/2009/03/the-art-of-kamil-smala/" target="_BLANK">More Work</a></p>
				</div>
			</div>
				
			<div class="boxgrid slideright">
				<img class="cover" src="martin.jpg"/>
				<h3>Martin Stranka</h3>
				<p>Photographer<br/><a href="http://www.nonsensesociety.com/2009/03/photography-by-martin-stranka/" target="_BLANK">More Work</a></p>
			</div>
			<div class="boxgrid thecombo">
				<img class="cover" src="florian.jpg"/>
				<h3>Florian Nicolle</h3>
				<p>Graphic Designer<br/><a href="http://www.nonsensesociety.com/2009/03/portrait-week-florian-nicolle/" target="_BLANK">More Work</a></p>
			</div>
			
			<div class="boxgrid slidedown">
				<img class="cover" src="nonsense.jpg"/>
					<h3>The Nonsense Society</h3>
					<p>Art, Music, Word<br/><a href="http://www.nonsensesociety.com" target="_BLANK">Website</a></p>	
			</div>
			<div class="boxgrid peek">
				<a href="http://feeds2.feedburner.com/buildinternet" target="_BLANK"><img src="birss.jpg"/></a>
				<a href="http://www.buildinternet.com" target="_BLANK"><img class="cover" src="buildinternet.jpg"/></a>
			</div>
			<p id="text">Hello </p>
</div>
	<div id="div1">
<div id="head" ><p id="forall" style="font-size:1.3em; margin-top:10px;position:absolute;">Sign up with Melange</p></div>

<form  name="signupform" id="sign" action="register.php" onsubmit="return allval()" method="post" >
</br>
<b><p id="forall" >Name*</p></b></br>
<input type="text" placeholder="First" name="first" id="field" size="15" onblur="fname()"  value="<?php if (isset($_POST['first'])) echo $_POST['first']; ?>"/>
<input type="text" placeholder="Last" name="last" id="field1" onblur="lname()" value="<?php if (isset($_POST['last'])) echo $_POST['last']; ?>"/>
<p id="demo"></p></br>
<p id="forall">Choose your username</p><br/>
<input type="text"  name="username" size="25px" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="varun.malhotra" id="field2" onblur="uname()"/>@melange.com<br/>
<p id="demo2"></p></br>
<p id="forall">Create a password</p><br/>
<input type="password" name="pass1" id="field3" onblur="passw1()" onkeypress="passwordStrength(this.value,document.getElementById('field3'))"/> <div id="im"></div>
<p id="demo3"></p>
<br/></br>
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
        <input type="button" id="btnrefresh" value="Refresh" onclick="DrawCaptcha();" /></br></br>
  
		<input id="txtInput" name="txtInput" type="text"  style="margin-left:10px;" onblur="chkcap()"/>
<p id="demo7"></p>
		
		
<br/><br/>
<input type="checkbox" name="tc" value="tc" id="field"  />  I agree to the Melange <a href="#">Terms of service</a> and <a href="#">Privacy Policy</a>
<input type="submit" value="Submit"  id="btnrefresh" style="margin-left:10px;" />

</form>

</div>
	</body>
</html>