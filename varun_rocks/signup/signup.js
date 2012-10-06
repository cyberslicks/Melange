function allval()
{
var r=fname() + lname() + uname() + passw1()  +  passw2() +chkday() +  chkyear() + chkcap() +ValidCaptcha();

if (r==0)
{document.forms["signupform"].submit();
return true;
}
return false;
}
function passwordStrength(password,passwordStrength)
{
var desc = new Array();
desc[0] = "Very Weak";
desc[1] = "Weak";
desc[2] = "Better";
desc[3] = "Medium";
desc[4] = "Strong";
desc[5] = "Strongest";

var score   = 0;

if (password.length > 6) score++;

if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

if (password.match(/\d+/)) score++;

if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

if (password.length > 12) score++;

if (password.length==0) score=0;
//passwordStrength.innerHTML = desc[score];
if (score==5)
{//document.getElementById("im").style.background="background-image:url('thumb-up.jpg')";
}
passwordStrength.className = "strength" + score;
}
function chkcap()
{
var x=document.forms["signupform"]["txtInput"].value;
if (x=="")
  {
  document.getElementById("demo7").style.color="#ff7f81";
  document.getElementById("txtInput").style.border="2px solid #ff7f81";
  document.getElementById("txtInput").style.border="1px thin";
  document.getElementById("demo7").innerHTML="Fill captcha";
  return 1;
  }
else
{document.getElementById("demo7").innerHTML="";
document.getElementById("txtInput").style.borderColor="#7094FF";
return 0;}
}
function fname()
{var x=document.forms["signupform"]["first"].value;
if (x=="")
  {
  document.getElementById("demo").style.color="#ff7f81";
  document.getElementById("field").style.border="2px solid #ff7f81";
  document.getElementById("demo").innerHTML="Fill ur name";
  return 1;
  }
else
{document.getElementById("demo").innerHTML="";
document.getElementById("field").style.borderColor="#7094FF";
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
  document.getElementById("demo").style.color="#ff7f81";
  document.getElementById("field1").style.border="2px solid #ff7f81";
  
  document.getElementById("demo").innerHTML="Fill ur name";
  return 1;}
else
{document.getElementById("demo").innerHTML="";
document.getElementById("field1").style.borderColor="#7094FF";
return 0;}  
}
function uname()
{var z=document.forms["signupform"]["username"].value;
if (z=="")
  {
  document.getElementById("demo2").style.color="#ff7f81";
  document.getElementById("field2").style.border="2px solid #ff7f81";
  document.getElementById("demo2").innerHTML="Fill ur username";
  return 1;}
 else
{document.getElementById("demo2").innerHTML="";
document.getElementById("field2").style.borderColor="#7094FF";
return 0;}  
}
function passw1()
{var a=document.forms["signupform"]["pass1"].value;
if (a=="")
  {
  document.getElementById("demo3").style.color="#ff7f81";
  document.getElementById("field3").style.border="2px solid #ff7f81";
  document.getElementById("demo3").innerHTML="Fill ur password";
  return 1;}
 else
{document.getElementById("demo3").innerHTML="";
document.getElementById("field3").style.borderColor="#7094FF";
return 0;}  
}
function passw2()
{var b=document.forms["signupform"]["pass2"].value;
 var a=document.forms["signupform"]["pass1"].value;
if (b=="")
  {
   document.getElementById("demo4").style.color="#ff7f81";
  document.getElementById("field4").style.border="2px solid #ff7f81";
  document.getElementById("demo4").innerHTML="Confirm password !";
  return 1;
  }

  
if (b!=a)
{
  document.getElementById("demo4").style.color="#ff7f81";
  document.getElementById("field3").style.border="2px solid #ff7f81";
  document.getElementById("field4").style.border="2px solid #ff7f81";
  document.getElementById("demo4").innerHTML="Password must be same";
  return 1;}
 
else
 {document.getElementById("demo4").innerHTML="";
 document.getElementById("field4").style.borderColor="#7094FF";
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
   document.getElementById("demo5").style.color="#ff7f81";
  document.getElementById("field5").style.border="2px solid #ff7f81";
  document.getElementById("demo5").innerHTML="Fill your date !";
  return 1;}
 else
 {document.getElementById("demo5").innerHTML="";
 document.getElementById("field5").style.borderColor="#7094FF";
 return 0;}
}
function chkyear()
{
var d=document.forms["signupform"]["year"].value;
if(d=="")

{
   document.getElementById("demo5").style.color="#ff7f81";
  document.getElementById("field6").style.border="2px solid #ff7f81";
  document.getElementById("demo5").innerHTML="Fill your date";
  return 1;}
 else
 {document.getElementById("demo5").innerHTML="";
 document.getElementById("field6").style.borderColor="#7094FF";
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

function DrawCaptcha()
    {
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		var a = possible.charAt(Math.floor(Math.random() * possible.length));
		var b = possible.charAt(Math.floor(Math.random() * possible.length));
		var c = possible.charAt(Math.floor(Math.random() * possible.length));
		var d = possible.charAt(Math.floor(Math.random() * possible.length));
		var e = possible.charAt(Math.floor(Math.random() * possible.length));
		var f = possible.charAt(Math.floor(Math.random() * possible.length));
		
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f ;
        document.getElementById("txtCaptcha").value = code
    }

    // Validate the Entered input aganist the generated security code function   
    function ValidCaptcha(){
        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('txtInput').value);
        if (str1 == str2) return true;        
        else
		{document.getElementById("demo7").style.color="#ff7f81";
		 document.getElementById("txtInput").style.border="2px solid #ff7f81";
		 document.getElementById("demo7").innerHTML="Captcha didn't match";
		 return false;
        }
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string)
    {
        return string.split(' ').join('');
    }