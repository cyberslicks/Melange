var b=-1;
var u=-1;
var i=-1;
var o=-1;
var t=-1;
var min=15;
var max=180;
var linespace=1;
var letterspace=0;
var wordspace=0;
var whitespace=-1;
var linebreak=-1;
var unicodebidi=-1;
var textindent =1;



$(document).ready(function(){
$("#navigation").click(function(){
$("#cssbox").fadeIn(3000);
});

});
$(document).ready(function()
{
	  
	
	  $("#Border").click(function(){
		$("#BorderAtr").slideToggle("slow");
	  });
	 $("#NavInner").click(function(){
		$("#NavInnerAtr").slideToggle("slow");
	  });
	  $("#Box").click(function(){
		$("#BoxAtr").slideToggle("slow");
	  });
	  $("#Text").click(function(){
		$("#TextAtr").slideToggle("slow");
	  });
	 
});
function BoxProp()
{
var c = document.forms["for3"]["width"].value;
var d = document.forms["for3"]["height"].value;
var e = document.forms["for3"]["shadow"].value;
var f = document.forms["for3"]["opacity"].value;
var g = document.forms["for3"]["radius"].value;
var h = document.forms["for3"]["left"].value;
var i = document.forms["for3"]["top"].value;

document.getElementById("txt").style.width=c;
document.getElementById("txt").style.height=d;
document.getElementById("txt").style.boxShadow=e;
document.getElementById("txt").style.opacity=f;
document.getElementById("txt").style.borderRadius=g;
document.getElementById("txt").style.marginLeft=h;
document.getElementById("txt").style.marginTop=i;
}
function Border()
{
var a = document.forms["for"]["width"].value;
var b = document.forms["for"]["style"].value;
var c = document.forms["for"]["color"].value;
var d= a + " " + b + " " + c ;
//document.getElementById('ha').style.border=d;
var allElements = document.getElementsByName('ha');
    for (var i=0; i<allElements.length; i++) {
        allElements[i].setAttribute('style', 'border:'+d+';');
    }
//document.getElementById("but1").style.boxSizing="inherit";
}
function NavInner()
{
var c = document.forms["for2"]["color"].value;
var d = document.forms["for2"]["text-align"].value;
var e = document.forms["for2"]["text"].value;
var f = document.forms["for2"]["text-color"].value;

//document.getElementsByName("ha").style.background=c;
//document.getElementsByName("ha").style.textAlign=d;
//document.getElementsByName("ha").style.color=f;
//document.getElementById("txt1").innerHTML=e;
var allElements = document.getElementsByName('ha');
    for (var i=0; i<allElements.length; i++) {
	    allElements[i].setAttribute('style', 'background:'+c+';textAlign:'+d+';color:'+f+';');
	}
}

function increaseFontSize() {
 
   var p = document.getElementsByTagName('span');
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
 
         var s = 20;
      }
      if(s!=max) {
 
         s += 1;
      }
      p[i].style.fontSize = s+"px"
 
   }
}

function decreaseFontSize() {
   var p = document.getElementsByTagName('span');
   for(i=0;i<p.length;i++) {
 
      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {
 
         var s = 20;
      }
      if(s!=min) {
 
         s -= 1;
      }
      p[i].style.fontSize = s+"px"
 
   }
}


function FontItalic() 
{
  i=i*-1;
	  if(i>0)
	  {
	document.getElementById("txt1").style.fontStyle="italic";
	}
	else
	{
	document.getElementById("txt1").style.fontStyle="normal";
	}
  }

  
function FontBold()
{
b=b*(-1);
if(b>0)
{
document.getElementById("txt1").style.fontWeight="900";
}
else
{
document.getElementById("txt1").style.fontWeight="300";
}
}


function FontUnderline()
{
u=u*-1;
if(u>0)
{
document.getElementById("txt1").style.textDecoration="underline";
}
else
{
document.getElementById("txt1").style.textDecoration="none";
}
}

function FontOverline()
{
o=o*-1;
if(o>0)
{
document.getElementById("txt1").style.textDecoration="overline";
}
else
{
document.getElementById("txt1").style.textDecoration="none";
}
}

function Fontlinethrough() 
{
  t=t*-1;
	  if(t>0)
	  {
	document.getElementById("txt1").style.textDecoration="line-through";
	}
	else
	{
	document.getElementById("txt1").style.textDecoration="none";
	}
  }


function FontFace()
{
var font1 = document.getElementById("SelectFontFace"); // or in jQuery use: select = this;
var FontFace = font1.options[font1.selectedIndex].text;
document.getElementById("txt1").style.fontFamily=FontFace;
  //document.getElementById("but1").style.fontFamily= select.value;

}  

function FontAlignCenter()
{
document.getElementById("txt").style.textAlign="center";

}

function FontAlignLeft()
{
document.getElementById("txt").style.textAlign="left";
}

function FontAlignRight()
{
document.getElementById("txt").style.textAlign="right";
}


//Space Management
function LineSpaceIncrease()
{
linespace=linespace+0.25;
document.getElementById("txt").style.lineHeight=linespace;
}

function LineSpaceDecrease()
{
linespace=linespace-0.25;
document.getElementById("txt").style.lineHeight=linespace;
}

function LetterSpaceDecrease()
{
letterspace=letterspace-1;
document.getElementById("txt").style.letterSpacing=letterspace;
}

function LetterSpaceIncrease()
{
letterspace=letterspace+1;
document.getElementById("navigation").style.letterSpacing=letterspace;
}

function WordSpaceIncrease()
{
wordspace=wordspace+1;
document.getElementById("txt").style.wordSpacing=wordspace;
}
function WordSpaceDecrease()
{
wordspace=wordspace-1;
document.getElementById("txt").style.wordSpacing=wordspace;
}


//Linebreak preservance
function WhiteSpace()
{
whitespace=whitespace*-1;
if(whitespace>0)
{
document.getElementById("txt").style.whiteSpace="pre";
}
else{
document.getElementById("txt").style.whiteSpace="normal";
}
}

function LineBreak()
{
linebreak=linebreak*-1;
if(linebreak>0)
{
document.getElementById("txt").style.whiteSpace="nowrap";
}
else{
document.getElementById("txt").style.whiteSpace="normal";
}
}
// Text transformation fucntions
function Uppercase()
{
document.getElementById("txt").style.textTransform="uppercase";
}

function Lowercase()
{
document.getElementById("txt").style.textTransform="lowercase";
}

function Capitalize()
{
document.getElementById("txt").style.textTransform="capitalize";
}

function TransformNone()
{
document.getElementById("txt").style.textTransform="none";
}


function TextIndentIncrease()
{
textindent=textindent+5;
document.getElementById("txt").style.textIndent=textindent;
}

function TextIndentDecrease()
{
textindent=textindent-5;
document.getElementById("txt").style.textIndent=textindent;
}

function URL()
{
var c=document.getElementById("txt1").value;
var e = document.forms["for2"]["text"].value;
c.url("www.google.com");
}

