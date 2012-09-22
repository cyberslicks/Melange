//var s= window.event.clientX 
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
//toggle slide 
$(document).ready(function()
{
	  $("#Spacing").click(function(){
		$("#SpacingContent").slideToggle("slow");
	  });

	  $("#Shadow").click(function(){
		$("#ShadowContent").slideToggle("slow");
	  });
	  
	  $("#TextTransform").click(function(){
		$("#TextTransformContent").slideToggle("slow");
	  });
	  
	  $("#TextIndentation").click(function(){
		$("#TextIndentationContent").slideToggle("slow");
	  });
	
	  $("#Alignment").click(function(){
		$("#AlignmentContent").slideToggle("slow");
	  });
	  
	  $("#TextDirection").click(function(){
		$("#TextDirectionContent").slideToggle("slow");
	  });
});

//css box apperance
$(document).ready(function(){
$("#but1").click(function(){
$("#cssbox").fadeIn(3000);
});

});



function increaseFontSize() {
 
   var p = document.getElementsByTagName('p');
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
   var p = document.getElementsByTagName('p');
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
	document.getElementById("but1").style.fontStyle="italic";
	}
	else
	{
	document.getElementById("but1").style.fontStyle="normal";
	}
  }

  
function FontBold()
{
b=b*(-1);
if(b>0)
{
document.getElementById("but1").style.fontWeight="900";
}
else
{
document.getElementById("but1").style.fontWeight="300";
}
}


function FontUnderline()
{
u=u*-1;
if(u>0)
{
document.getElementById("but1").style.textDecoration="underline";
}
else
{
document.getElementById("but1").style.textDecoration="none";
}
}

function FontOverline()
{
o=o*-1;
if(o>0)
{
document.getElementById("but1").style.textDecoration="overline";
}
else
{
document.getElementById("but1").style.textDecoration="none";
}
}

function Fontlinethrough() 
{
  t=t*-1;
	  if(t>0)
	  {
	document.getElementById("but1").style.textDecoration="line-through";
	}
	else
	{
	document.getElementById("but1").style.textDecoration="none";
	}
  }


function FontFace()
{
var font1 = document.getElementById("SelectFontFace"); // or in jQuery use: select = this;
var FontFace = font1.options[font1.selectedIndex].text;
document.getElementById("but1").style.fontFamily=FontFace;
  //document.getElementById("but1").style.fontFamily= select.value;

}  
  
//alignment control  
function FontAlignCenter()
{
document.getElementById("but1").style.textAlign="center";
}

function FontAlignLeft()
{
document.getElementById("but1").style.textAlign="left";
}

function FontAlignRight()
{
document.getElementById("but1").style.textAlign="right";
}


//Space Management
function LineSpaceIncrease()
{
linespace=linespace+0.25;
document.getElementById("but1").style.lineHeight=linespace;
}

function LineSpaceDecrease()
{
linespace=linespace-0.25;
document.getElementById("but1").style.lineHeight=linespace;
}

function LetterSpaceDecrease()
{
letterspace=letterspace-1;
document.getElementById("but1").style.letterSpacing=letterspace;
}

function LetterSpaceIncrease()
{
letterspace=letterspace+1;
document.getElementById("but1").style.letterSpacing=letterspace;
}

function WordSpaceIncrease()
{
wordspace=wordspace+1;
document.getElementById("but1").style.wordSpacing=wordspace;
}
function WordSpaceDecrease()
{
wordspace=wordspace-1;
document.getElementById("but1").style.wordSpacing=wordspace;
}


//Linebreak preservance
function WhiteSpace()
{
whitespace=whitespace*-1;
if(whitespace>0)
{
document.getElementById("but1").style.whiteSpace="pre";
}
else{
document.getElementById("but1").style.whiteSpace="normal";
}
}

function LineBreak()
{
linebreak=linebreak*-1;
if(linebreak>0)
{
document.getElementById("but1").style.whiteSpace="nowrap";
}
else{
document.getElementById("but1").style.whiteSpace="normal";
}
}
// Text transformation fucntions
function Uppercase()
{
document.getElementById("but1").style.textTransform="uppercase";
}

function Lowercase()
{
document.getElementById("but1").style.textTransform="lowercase";
}

function Capitalize()
{
document.getElementById("but1").style.textTransform="capitalize";
}

function TransformNone()
{
document.getElementById("but1").style.textTransform="none";
}


function TextIndentIncrease()
{
textindent=textindent+5;
document.getElementById("but1").style.textIndent=textindent;
}

function TextIndentDecrease()
{
textindent=textindent-5;
document.getElementById("but1").style.textIndent=textindent;
}

// Direction Function
function R2L()
{
document.getElementById("but1").style.direction="rtl";
}

function L2R()
{
document.getElementById("but1").style.direction="ltr";
}

// Shadow fucntions
function FontShadow()
{
document.getElementById("but1").style.textShadow="5px 5px 1px #ff0000,10px 10px 1px #0000ff";
}

function FontShadowR()
{
document.getElementById("but1").style.textShadow="none";
}

//reset button
function FontReset() 
    {
document.getElementById("but1").style.font="normal normal 20px Times New Roman";
document.getElementById("but1").style.textDecoration="none";
document.getElementById("but1").style.whiteSpace="normal";
document.getElementById("but1").style.textAlign="left";
document.getElementById("but1").style.wordSpacing=0;
document.getElementById("but1").style.letterSpacing=1;
document.getElementById("but1").style.lineHeight=1;
document.getElementById("but1").style.textShadow="none";
document.getElementById("but1").style.textIndent=1;
document.getElementById("but1").style.direction="ltr";
  }


