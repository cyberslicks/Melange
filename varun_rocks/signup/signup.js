function allval()
{
var r=fname() + lname() + uname() + passw1()  +  passw2() +chkday() +  chkyear();
alert(r);
if (r==0)
{document.forms["signupform"].submit();

}
}

function fname()
{var x=document.forms["signupform"]["first"].value;
if (x=="")
  {
  document.getElementById("demo").style.color="red";
  document.getElementById("field").style.borderColor="#ff0000";
  document.getElementById("demo").innerHTML="Fill ur name";
  return 1;
  }
else
{document.getElementById("demo").innerHTML="";
document.getElementById("field").style.borderColor="#ffffff";
return 0;}  
}
/*
function fname1()
{
document.getElementById("demo").innerHTML="";
document.getElementById("field").style.borderColor="blue";
}

function lname1()
{
document.getElementById("demo").innerHTML="";
document.getElementById("field1").style.borderColor="blue";
}*/
function lname()
{var y=document.forms["signupform"]["last"].value;
if (y=="")
  {
  document.getElementById("demo").style.color="red";
  document.getElementById("field1").style.borderColor="#ff0000";
  document.getElementById("demo").innerHTML="Fill ur name";
  return 1;}
else
{document.getElementById("demo").innerHTML="";
document.getElementById("field1").style.borderColor="#ffffff";
return 0;}  
}
function uname()
{var z=document.forms["signupform"]["username"].value;
if (z=="")
  {
  document.getElementById("demo2").style.color="red";
  document.getElementById("field2").style.borderColor="#ff0000";
  document.getElementById("demo2").innerHTML="Fill ur username";
  return 1;}
 else
{document.getElementById("demo2").innerHTML="";
document.getElementById("field2").style.borderColor="#ffffff";
return 0;}  
}
function passw1()
{var a=document.forms["signupform"]["pass1"].value;
if (a=="")
  {
  document.getElementById("demo3").style.color="red";
  document.getElementById("field3").style.borderColor="#ff0000";
  document.getElementById("demo3").innerHTML="Fill ur password";
  return 1;}
 else
{document.getElementById("demo3").innerHTML="";
document.getElementById("field3").style.borderColor="#ffffff";
return 0;}  
}
function passw2()
{var b=document.forms["signupform"]["pass2"].value;
 var a=document.forms["signupform"]["pass1"].value;
if (b=="")
  {
   document.getElementById("demo4").style.color="red";
  document.getElementById("field4").style.borderColor="#ff0000";
  document.getElementById("demo4").innerHTML="Confirm password !";
  return 1;
  }

  
if (b!=a)
{
  document.getElementById("demo4").style.color="red";
  document.getElementById("field3").style.borderColor="#ff0000";
  document.getElementById("field4").style.borderColor="#ff0000";
  document.getElementById("demo4").innerHTML="Password must be same";
  return 1;}
 
else
 {document.getElementById("demo4").innerHTML="";
 document.getElementById("field4").style.borderColor="#ffffff";
  return 0; 
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
   document.getElementById("demo5").style.color="red";
  document.getElementById("field5").style.borderColor="#ff0000";
  document.getElementById("demo5").innerHTML="Fill your date !";
  return 1;}
 else
 {document.getElementById("demo5").innerHTML="";
 document.getElementById("field5").style.borderColor="#ffffff";
 return 0;}
}
function chkyear()
{
var d=document.forms["signupform"]["year"].value;
if(d=="")

{
   document.getElementById("demo5").style.color="red";
  document.getElementById("field6").style.borderColor="#ff0000";
  document.getElementById("demo5").innerHTML="Fill your date";
  return 1;}
 else
 {document.getElementById("demo5").innerHTML="";
 document.getElementById("field6").style.borderColor="#ffffff";
 return 0;}
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

