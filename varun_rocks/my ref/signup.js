function fname()
{var x=document.forms["signupform"]["first"].value;
if (x=="")
  {
  alert("First name must be filled out");
  }
}
function lname()
{var y=document.forms["signupform"]["last"].value;
if (y=="")
  {
  alert("Last name must be filled out");
  }
}
function uname()
{var z=document.forms["signupform"]["username"].value;
if (z=="")
  {
  alert("email must be filled out");
  }
}
function passw1()
{var a=document.forms["signupform"]["pass1"].value;
if (a=="")
  {
  alert("email must be filled out");
  }
}
function passw2()
{var b=document.forms["signupform"]["pass2"].value;
 var a=document.forms["signupform"]["pass1"].value;
if (b=="")
  {
  alert("email must be filled out");
  }
if (b!=a)
{
alert("password must be same");
}  
}
function chkmon()
{
var c=document.forms["signupform"]["month"].value;
if(c=="")
{
alert("please select a month");
}
}
function chkday()
{
var d=document.forms["signupform"]["day"].value;
if(d=="")
{
alert("please fill ur b'day date");
}
}
function chkyear()
{
var d=document.forms["signupform"]["year"].value;
if(d=="")
{
alert("please fill ur b'day year");
}
}
function chkgen()
{
var e=document.forms["signupform"]["gender"].value;
if(e=="")
{
alert("please specify your gender");
}
}

function chktick()
{
if(!(document.forms["signupform"]["tc"].checked))
alert("agree t&c before submitting");
}