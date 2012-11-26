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


<link rel="stylesheet" type="text/css" href="navmenu.css" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="nav.js"></script>

 
<style type="text/css"> 
#panel,#flip,#panel1
{
height:80px;
width:1000px;

background:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel
{
height:80px;width:10000px;display:none;
background:white;
border:solid 1px #ffffff;
}
#panel1
{
height:100px;display:none;
margin-left:200px;
}
#panel2
{width:250px;
background:rgb(237,237,237);
border:solid 1px #c3c3c3;
height:159px;
margin-left:300px;
margin-top:100px;
position:absolute;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
 
    <style>
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 20%; }
    #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
    #sortable li span { position: absolute; margin-left: -1.3em; }
    #sortable li:hover
	{
	cursor:move;
	}
	</style>
    <script>
    $(function() {
        $( "#sortable" ).sortable();
		
        $( "#sortable" ).disableSelection();
    });
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


<body>

<div class="cssbox" id="cssbox"	>

<h2><center>
Properties
</h2>
<div Class="Property" id="Border">
Border
</div>
<form name="for" >
<div class="PropertyContent" id="BorderAtr">

<input type="text" id="width" placeholder="border-width"  />
<input type="text" id="style" placeholder="border-style"  />
<input type="text" id="color" placeholder="border-color"  />
<input type="button" id="submit" value="submit" onclick=Border() />

<br></div></form>
<div Class="Property" id="NavInner">
Inner
</div>
<form name="for2">
<div class="PropertyContent" id="NavInnerAtr">
<input type="text" id="text" placeholder="your-text" />
<input type="text" id="text-color" placeholder="text-color" />
<input type="text" id="text-align" placeholder="text-align" />
<input type="text" id="color" placeholder="background-color" />
<input type="button" value="submit" onclick=NavInner() />
</div></form>


<div Class="Property" id="Box">
Box
</div>
<form name="for3">
<div class="PropertyContent" id="BoxAtr">
<input type="text" id="width" placeholder="width" />
<input type="text" id="height" placeholder="height" />
<input type="text" id="shadow" placeholder="shadow" />
<input type="text" id="opacity" placeholder="opacity" />
<input type="text" id="radius" placeholder="border-radius" />
<input type="text" id="left" placeholder="margin-left" />
<input type="text" id="top" placeholder="margin-top" />
<input type="button" value="submit" onclick=BoxProp() />
</div></form>

<div Class="Property" id="Text">
Text
</div>
<div class="PropertyContent" id="TextAtr">
<input type="button" id="FontInc" value="Size++" onclick=increaseFontSize()>
<input type="button" id="Fontdec" value="Size--" onclick=decreaseFontSize()>
<!--input type="text" id="Fontval" value=s --><br>
<input type="button" id="Bold" value="B" onclick=FontBold()>
<input type="button" id="Italic" value="I" onclick=FontItalic()>
<input type="button" id="Underline" value="U" onclick=FontUnderline()>
<input type="button" id="Overline" value="O" onclick=FontOverline()>
<input type="button" id="Linethrough" value="T" onclick=Fontlinethrough()>
<br>
Font Face:<br>
<select id="SelectFontFace" onselect=FontFace()>
 <option>academy engraved let
<option>algerian
<option>amaze</option>
<option>arial</option>
<option>arial black</option>
<option>balthazar</option>
<option>bankgothic lt bt</option>
<option>bart</option>
<option>bimini</option>
<option>comic sans ms</option>
<option>book antiqua</option>
<option>bookman old style</option>
<option>braggadocio</option>
<option>britannic bold</option>
<option>brush script mt</option>
<option>century gothic</option>
<option>century schoolbook</option>
<option>chasm</option>
<option>chicago</option>
<option>colonna mt</option>
<option>comic sans ms</option>
<option>commercialscript bt</option>
<option>coolsville</option>
<option>courier</option>
<option>courier new</option>
<option>cursive</option>
<option>dayton</option>
<option>desdemona</option>
<option>fantasy</option>
<option>flat brush</option>
<option>footlight mt light</option>
<option>futurablack bt</option>
<option>futuralight bt</option>
<option>garamond</option>
<option>gaze</option>
<option>geneva</option>
<option>georgia</option>
<option>geotype tt</option>
<option>helterskelter</option>
<option>helvetica</option>
<option>herman</option>
<option>highlight let</option>
<option>impact</option>
<option>jester</option>
<option>joan</option>
<option>john handy let</option>
<option>jokerman let</option>
<option>kelt</option>
<option>kids</option>
<option>kino mt</option>
<option>la bamba let</option>
<option>lithograph</option>
<option>lucida console</option>
<option>map symbols</option>
<option>marlett</option>
<option>matteroffact</option>
<option>matisse itc</option>
<option>matura mt script capitals</option>
<option>mekanik let</option>
<option>monaco</option>
<option>monospace</option>
<option>monotype sorts</option>
<option>ms linedraw</option>
<option>new york</option>
<option>olddreadfulno7 bt</option>
<option>orange let</option>
<option>palatino</option>
<option>playbill</option>
<option>pump demi bold let</option>
<option>puppylike</option>
<option>roland</option>
<option>sans-serif</option>
<option>scripts</option>
<option>scruff let</option>
<option>serif</option>
<option>short hand</option>
<option>signs normal</option>
<option>simplex</option>
<option>simpson</option>
<option>stylus bt</option>
<option>superfrench</option>
<option>surfer</option>
<option>swis721 bt</option>
<option>swis721 blkoul bt</option>
<option>symap</option>
<option>symbol</option>
<option>tahoma</option>
<option>technic</option>
<option>tempus sans itc</option>
<option>terk</option>
<option>times</option>
<option selected="selected">times new roman</option>
<option>trebuchet ms</option>
<option>trendy</option>
<option>txt</option>
<option>verdana</option>
<option>victorian let</option>
<option>vineta bt</option>
<option>vivian</option>
<option>webdings</option>
<option>wingdings</option>
<option>western</option>
<option>westminster</option>
<option>westwood let</option>
<option>wide latin</option>
<option>zapfellipt bt</option>
  
  
  <select>
<input type="button" id="Left" value="Set Font" onclick=FontFace()>
<input type="button" id="Left" value="Left" onclick=FontAlignLeft()>
<input type="button" id="Center" value="Center" onclick=FontAlignCenter()>
<input type="button" id="Right" value="Right" onclick=FontAlignRight()><br>
<input type="button" id="Whitespace" value="Whitespace" onclick=WhiteSpace()>
<input type="button" id="Linebreak" value="Linebreak" onclick=LineBreak()>
<input type="button" id="LineInc" value="Increase" onclick=LineSpaceIncrease()>
<input type="button" id="LineDec" value="Decrease" onclick=LineSpaceDecrease()>
<input type="button" id="LetterInc" value="Increase" onclick=LetterSpaceIncrease()>
<input type="button" id="LetterDec" value="Decrease" onclick=LetterSpaceDecrease()>
<input type="button" id="WordInc" value="Increase" onclick=WordSpaceIncrease()>
<input type="button" id="WordDec" value="Decrease" onclick=WordSpaceDecrease()>
<input type="button" id="uppercase" value="Uppercase" onclick=Uppercase()>
<input type="button" id="lowercase" value="Lowercase" onclick=Lowercase()><br>
<input type="button" id="capitalize" value="Capitalize" onclick=Capitalize()>
<input type="button" id="capitalize" value="AsWritten" onclick=TransformNone()>
<input type="button" id="TextIndentInc" value="Increase" onclick=TextIndentIncrease()>
<input type="button" id="TextIndentDec" value="Decrease" onclick=TextIndentDecrease()><br>
<input type="text" id="URL" />
<input type="button" value="submit" onclick=URL() >
</div>

</div>


<div id="fold">
	<div>
	<a href="#" class="button black" onclick="prn1()"><span></span>Reset</a>

	<a href="#" class="button black" id="flip1"><span></span>Preview</a>
	</br>

	</div>
	 
	<div id="panel2">
	<p align="center">Add New Link</p>

	<span style="margin-left:3px">Link Name</span><input type="text" style="margin-left:1px;" id="a1" name="nav"/>
	<span style="margin-left:3px">Link Url </span><input type="text" style="margin-left:14px;" id="a2" name="link"/></br>
	<input type="button" value="Add Link" style="margin-left:85px;" onclick="add()"/></br>
	</div>
	<div id="panel">Hello world!</div>
	<div id="manage">
	<ul id="sortable">
	<div id="111"><li id="0" name="1" class="ui-state-default"><a href="#">Home</a></li></div>
	<div id="112"><li id="1" name="1" class="ui-state-default"><a href="#">About</a> </li></div>
	<div id="113"><li id="2" name="1" class="ui-state-default"><a href="#">Contact</a></li></div>
	<div id="114"><li id="3" name="1" class="ui-state-default"><a href="#">Help</a> </li></div>
	</ul>
	<input type="button" value="ok" onclick="know()">
	</div>
</div>
<script> 
var j=1,d=5,c3="",g=3,v="v",h=114,h1,h2,g1,bn,ids,ids1,ids2;
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel").slideToggle("slow");
  });
});  
  
 function know()
{
var r=new Array();
var t=new Array();
var di=new Array();
for (var ids=0;ids<(g+1);ids++)
{
t[ids]=$("#sortable  div:eq("+ids+") a").text();
//di[ids]=$("#sortable li:eq("+ids+")").attr("id");
}
//alert(di[0]+di[1]+di[2]+di[3]);
for (var ids1=0;ids1<(g+1);ids1++)
{
$("#navigation ul li:eq("+ids1+") a").text(t[ids1]);
//$("#navigation ul li:eq("+ids1+")").attr("id",di[ids1]);
}
/*
var r1=$('[name="1"]').get(0).id ;
var r2=$('[name="1"]').get(1).id;
var r3=$('[name="1"]').get(2).id;
var r4=$('[name="1"]').get(3).id;*/
/*
var t1=$("#navigation li:eq(\""+r1+"\") a").text();
var t2=$("#navigation li:eq(\""+r2+"\") a").text();
var t3=$("#navigation li:eq(\""+r3+"\") a").text();
var t4=$("#navigation li:eq(\""+r4+"\") a").text();

$("#navigation ul li:eq(0) a").text(t1);
$("#navigation ul li:eq(1) a").text(t2);
$("#navigation ul li:eq(2) a").text(t3);
$("#navigation ul li:eq(3) a").text(t4);*/
} 
function prn()
{
j=j+1;
document.getElementById("panel").innerHTML="<span id=\"navigation\"><ul><li id=\"111\" name=\"ha\"><a href=\"Home\">Home</a></li><li name=\"ha\" id=\"112\"><a href=\"About\">About</a></li><li name=\"ha\"  id=\"113\"><a href=\"Contact\">Contact</a></li><li name=\"ha\"  id=\"114\"><a href=\"Help\">Help</a></li></ul></span>";

//document.getElementById("panel").innerHTML="v1+v2+v3+v4";

}
function prn1()
{

document.getElementById("panel").innerHTML="<div id=\"lol\"><span id=\"navigation\"><ul><li id=\"111\" name=\"ha\"><a href=\"Home\">Home</a></li><li name=\"ha\" id=\"112\"><a href=\"About\">About</a></li><li name=\"ha\"  id=\"113\"><a href=\"Contact\">Contact</a></li><li name=\"ha\"  id=\"114\"><a href=\"Help\">Help</a></li></ul></span></div>";
for(h1=115;h1<h;h1++)
{$("#manage ul li:eq("+h1+")").remove();
}
$("#sortable").html("<div id=\"111\"><li id=\"0\" name=\"1\" class=\"ui-state-default\"><a href=\"#\">Home</a></li></div><div id=\"112\"><li id=\"1\" name=\"1\" class=\"ui-state-default\"><a href=\"#\">About</a></li></div><div id=\"113\"><li id=\"2\" name=\"1\" class=\"ui-state-default\"><a href=\"#\">Contact</a></li></div><div id=\"114\"><li id=\"3\" name=\"1\" class=\"ui-state-default\"><a href=\"#\">Help</a></li></div>");

g=3;
}
function add()
{   
    g=g+1,h=h+1;
    var c1=document.getElementById("a1").value;
	var c2=document.getElementById("a2").value;
    /*var target = $("li:last"); // 
     
	if(c1!='' && c2!='')
	target.after("<div id=\"navigation\"><li><a href=\"" + c2 +"\">" +c1+ "</a></li></div></br>"); // insert a new list-item
	*/$("#navigation ul").append("<li name=\"ha\" id=\""+h+"\"><a href=\"" + c2 +"\">" +c1+ "</a></li>");
	$("#manage ul").append("<div id=\""+h+"\"><li class=\"ui-state-default\" name=\"1\" id=\""+g+"\"><a href=\"" + c2 +"\">" +c1+ "</a></li></div>");
	
}
function del(g1)
{
/*
$("#navigation li:eq("+(g1-111)+")").remove();
$("#manage div:eq("+(g1-111)+")").remove();
*/
$("#"+g1).remove();

}
prn();
</script>


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
	<a href="https://www.facebook.com/pages/Cyberslicks/279407935509252"><img src="./images/facebook.png" > </a> &nbsp;
<a href="https://twitter.com/cyberslicks"> <img src="./images/twitter.png" > </a>&nbsp;
<img src="./images/google+.png"> &nbsp;
</br>
<a href="https://github.com/cyberslicks/Melange"><img src="./images/github.png"> </a>&nbsp;
<a href="http://cyberslicks.wordpress.com"><img src="./images/wordpress.png"> </a>&nbsp;
<a href="index.php"><img src="./images/rsss.png"> </a>&nbsp;
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



</section>


 
</footer>


	

</body>
</html>


