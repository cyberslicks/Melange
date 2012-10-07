<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="form.css"/>
<link rel="stylesheet" type="text/css" href="tooltip.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$("#tooltip span").fadeIn(3000);
});


function showCustomer(str)
{
var xmlhttp;    
if (str=='')
  {
  document.getElementById("prt").innerHTML="";
  //alert("l");
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.onreadystatechange=function()
  {//alert("2");
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {//alert("3");
    document.getElementById("prt").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","useraver.php?username="+str,true);
xmlhttp.send();
var c=document.getElementById("prt").innerHTML;
if(c=="match")
document.getElementById("prt").innerHTML="";
else
{
document.getElementById("prt").innerHTML="Username or password didn't match";
//return false;
}
}
function showCustomer1(str1)
{
var xmlhttp;    
if (str1=='')
  {
  document.getElementById("prt1").innerHTML="";
  //alert("l");
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.onreadystatechange=function()
  {//alert("2");
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {//alert("3");
    document.getElementById("prt1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","useraver1.php?password="+str1,true);
xmlhttp.send();
var c=document.getElementById("prt1").innerHTML;
if(c=="match")
document.getElementById("prt1").innerHTML="";
else
{
document.getElementById("prt1").innerHTML="Username or password didn't match";
//return false;
}
}
function s()
{var c=document.getElementById("prt").innerHTML;
var c1=document.getElementById("prt1").innerHTML;
if(c=="match")
{
if(c1=="match")
return true;
}else
{
document.getElementById("prt2").innerHTML="Username and Password didn't match";
return false;
}
}
</script>


</head>
<body>
<div id="header"><p style="font-family:Brush script MT;
font-size:4.0em;
font-weight:1.2em;position:absolute;margin-left:360px;margin-top:20px;color:rgb(250,253,253)">Melange</p>
<form name="new" action="signup/signup.php">
<input type="submit" value="Create a new Melange Account" id="new"/></form>
<div id="box">
<p style="font-size:1.6em;">Sign in </p>


<form  name="f" onsubmit="return s()">
<p>Username</br></br>
<a class="tooltip" ><input type="text" onkeyup="showCustomer(this.value)" id="field" class="tooltip" name="username"/><span class="classic" >Fill ur name</span></a>
<p>Password</br></br>
<a class="tooltip" ><input type="password"  name="password" class="tooltip" id="field" onkeyup="showCustomer1(this.value)"  />
<span class="classic" >Fill Password</span></a>
<div id="strendth"></div>
</p>
<p id="prt2"></p>
<input type="submit" id="sub" value="Login"  />
<p id="prt"></p></br><p id="prt1"></p>
</div>
</div>
<div id="downa">

</body>
</html>