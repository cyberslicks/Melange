
$(document).ready(function(){
$("#but1").click(function(){

$("#cssbox").fadeIn(3000);
});

});

//var s= window.event.clientX 

var min=15;
var max=180;
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
document.getElementById("but1").style.fontStyle="italic";

  }

function FontBold()
{
document.getElementById("but1").style.fontWeight="900";
}

function FontUnderline()
{
document.getElementById("but1").style.textDecoration="underline";
}

function FontOverline()
{
document.getElementById("but1").style.textDecoration="overline";
}

function FontReset() 
    {
document.getElementById("but1").style.font="normal normal 20px Times New Roman";
document.getElementById("but1").style.textDecoration="none";
  }

function FontFace()
{
var select = document.getElementByID('SelectFontFace'); // or in jQuery use: select = this;
alert(select.value);
  //document.getElementById("but1").style.fontFamily= select.value;

}  
  
  
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

function LineSpaceIncrease()
{
document.getElementById("but1").style.lineHeight="2";
}

function FontShadow()
{
document.getElementById("but1").style.textShadow="5px 5px 1px #ff0000,10px 10px 1px #0000ff";
}

function FontShadowR()
{
document.getElementById("but1").style.textShadow="none";
}
