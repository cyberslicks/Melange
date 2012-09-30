function PropertyBox(id) {
	
this.id = id;
 
 
 /* toggle keys */

this.bold=-1; 
this.underline=-1;
this.italic=-1; 
this.overline=-1;
this.linethrough=-1; 
this.minimumFontSize=15; 
this.maximumFontSize=180; 
this.linespace=1; 
this.letterspace=0; 
this.wordspace=0;
this.whitespace=-1;
this.linebreak=-1;
this.unicodebidi=-1; 
this.textindent =1; 
	
	
}


PropertyBox.prototype.propertyBoxTransition = function() {
	
	$('#'+this.id).fadeIn(3000);
}


PropertyBox.prototype.textSegmentTransitionInitializer = function() {
	
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
	
	
}

PropertyBox.prototype.colorPickerBinder = function(previewId,targetId,targetType) {
	
		$('#'+previewId).ColorPicker({
	        color: '#000000',
	        onShow: function (colpkr) {
	            $(colpkr).fadeIn(500);
	            return false;
	        },
	        onHide: function (colpkr) {
	            $(colpkr).fadeOut(500);
	            return false;
	        },
	        onChange: function (hsb, hex, rgb) {
	            $('#'+previewId).css('background-color', '#' + hex);
				//document.getElementById("but1").style.color='#'+hex;
				switch(targetType)
				{
					
					case 1 :
					document.getElementById(targetId).style.color='#'+hex;
					break;
					
					case 2:
					document.getElementById(targetId).style.backgroundColor='#'+hex;
					break;
					
					case 3:
					document.getElementById(targetId).style.borderColor='#'+hex;
					break;
					
					
					case 4:
					document.getElementById(targetId).style.borderBottomColor='#'+hex;
					break;
					
					
					case 5:
					document.getElementById(targetId).style.borderLeftColor='#'+hex;
					break;
					
					case 6:
					document.getElementById(targetId).style.borderTopColor='#'+hex;
					break;
				
				
					case 7:
					document.getElementById(targetId).style.borderRightColor='#'+hex;
					break;
				
				
				
					case 8:
					document.getElementById(targetId).style.outlineColor='#'+hex;
					break;
				
					
					case 9:
					document.getElementById(targetId).style.outlineColor='#'+hex;
					break;
				
				}
	        
	        }
	    });

}



PropertyBox.prototype.textPropertiesBinder = function(id) {
	
document.getElementById("FontInc").addEventListener('click',$.proxy(function(){ this.increaseFontSize(id);},this),false);
document.getElementById("Fontdec").addEventListener('click',$.proxy(function(){ this.decreaseFontSize(id);},this),false);
document.getElementById("Bold").addEventListener('click',$.proxy(function(){ this.setFontBold(id);},this),false);
document.getElementById("Italic").addEventListener('click',$.proxy(function(){ this.setFontItalic(id);},this),false);
document.getElementById("Underline").addEventListener('click',$.proxy(function(){ this.setFontUnderline(id);},this),false);
document.getElementById("Overline").addEventListener('click',$.proxy(function(){ this.setFontOverline(id);},this),false);
document.getElementById("Linethrough").addEventListener('click',$.proxy(function(){ this.setFontlinethrough(id);},this),false);

this.colorPickerBinder("color-chnager",id,1);

document.getElementById("fontface").addEventListener('click',$.proxy(function(){ this.setFontFace(id);},this),false);	

document.getElementById("Left").addEventListener('click',$.proxy(function(){ this.setFontAlignLeft(id);},this),false);
document.getElementById("Center").addEventListener('click',$.proxy(function(){ this.setFontAlignCenter(id);},this),false);	
document.getElementById("Right").addEventListener('click',$.proxy(function(){ this.setFontAlignRight(id);},this),false);	
document.getElementById("Whitespace").addEventListener('click',$.proxy(function(){ this.WhiteSpace(id);},this),false);	
document.getElementById("Linebreak").addEventListener('click',$.proxy(function(){ this.setLineBreak(id);},this),false);

document.getElementById("LineInc").addEventListener('click',$.proxy(function(){ this.increaseLineSpace(id);},this),false);
document.getElementById("LineDec").addEventListener('click',$.proxy(function(){ this.decreaseLineSpace(id);},this),false);

document.getElementById("LetterInc").addEventListener('click',$.proxy(function(){ this.increaseLetterSpace(id);},this),false);
document.getElementById("LetterDec").addEventListener('click',$.proxy(function(){ this.decreaseLetterSpace(id);},this),false);

document.getElementById("WordInc").addEventListener('click',$.proxy(function(){ this.increaseWordSpace(id);},this),false);
document.getElementById("WordDec").addEventListener('click',$.proxy(function(){ this.decreaseWordSpace(id);},this),false);

document.getElementById("uppercase").addEventListener('click',$.proxy(function(){ this.setUppercase(id);},this),false);
document.getElementById("lowercase").addEventListener('click',$.proxy(function(){ this.setLowercase(id);},this),false);
document.getElementById('capitalize').addEventListener('click',$.proxy(function(){ this.capitalize(id);},this),false);
document.getElementById("normal").addEventListener('click',$.proxy(function(){ this.transformNone(id);},this),false);

document.getElementById("TextIndentInc").addEventListener('click',$.proxy(function(){ this.setTextIndentIncrease(id);},this),false);
document.getElementById("TextIndentDec").addEventListener('click',$.proxy(function(){ this.setTextIndentDecrease(id);},this),false);

document.getElementById("Right-Left").addEventListener('click',$.proxy(function(){ this.r2L(id);},this),false);
document.getElementById("Left-Right").addEventListener('click',$.proxy(function(){ this.l2R(id);},this),false);

document.getElementById("AddShadow").addEventListener('click',$.proxy(function(){ this.setFontShadow(id);},this),false);
document.getElementById("RemoveShadow").addEventListener('click',$.proxy(function(){ this.removeFontShadow(id);},this),false);

document.getElementById("Reset").addEventListener('click',$.proxy(function(){ this.setFontReset(id);},this),false);


}


PropertyBox.prototype.increaseFontSize = function(id) {
 
   var p = document.getElementsById(id);
   
 
      if(p.style.fontSize) {
         var s = parseInt(p.style.fontSize.replace("px",""));
      } else {
 
         var s = 20;
      }
      if(s!=max) {
 
         s += 1;
      }
      p.style.fontSize = s+"px"
 
   
}

PropertyBox.prototype.decreaseFontSize = function(id) {
   var p = document.getElementsByTagName(id);
   
 
      if(p.style.fontSize) {
         var s = parseInt(p.style.fontSize.replace("px",""));
      } else {
 
         var s = 20;
      }
      if(s!=min) {
 
         s -= 1;
      }
      p.style.fontSize = s+"px"
 
   
}


PropertyBox.prototype.setFontItalic= function(id) 
{
  this.italic*=-1;
	  if(this.italic>0)
	  {
	document.getElementById(id).style.fontStyle="italic";
	}
	else
	{
	document.getElementById(id).style.fontStyle="normal";
	}
  }

  
PropertyBox.prototype.setFontBold = function(id)
{
this.bold*=-1;

if(this.bold>0)
{
document.getElementById(id).style.fontWeight="900";
}
else
{
document.getElementById(id).style.fontWeight="300";
}
}


PropertyBox.prototype.setFontUnderline = function(id)
{
this.underline*=-1;

if(this.underline>0)
{
document.getElementById(id).style.textDecoration="underline";
}
else
{
document.getElementById(id).style.textDecoration="none";
}
}

PropertyBox.prototype.setFontOverline = function(id)
{
this.overline*=-1;

if(this.overline>0)
{
document.getElementById(id).style.textDecoration="overline";
}
else
{
document.getElementById(id).style.textDecoration="none";
}
}

PropertyBox.prototype.setFontlinethrough = function(id) 
{
  this.linethrough*=-1;
	  if(this.linethrough>0)
	  {
	document.getElementById(id).style.textDecoration="line-through";
	}
	else
	{
	document.getElementById(id).style.textDecoration="none";
	}
  }

PropertyBox.prototype.setFontFace =function(id)
{
var font1 = document.getElementById("SelectFontFace"); // or in jQuery use: select = this;
var FontFace = font1.options[font1.selectedIndex].text;
document.getElementById(id).style.fontFamily=FontFace;
  

}  
  
//alignment control  
PropertyBox.prototype.setFontAlignCenter =function(id)
{
document.getElementById(id).style.textAlign="center";

}

PropertyBox.prototype.setFontAlignLeft = function(id)
{
document.getElementById(id).style.textAlign="left";
}

PropertyBox.prototype.setFontAlignRight = function(id)
{
document.getElementById(id).style.textAlign="right";
}


//Space Management
PropertyBox.prototype.increaseLineSpace = function(id)
{
this.linespace+=0.25;
document.getElementById(id).style.lineHeight=linespace;
}

PropertyBox.prototype.decreaseLineSpace = function(id)
{
this.linespace-=0.25;
document.getElementById(id).style.lineHeight=linespace;
}

PropertyBox.prototype.decreaseLetterSpace = function(id)
{
letterspace=letterspace-1;
document.getElementById("but1").style.letterSpacing=letterspace;
}

PropertyBox.prototype.increaseLetterSpace = function(id)
{
this.letterspace+=1;
document.getElementById(id).style.letterSpacing=letterspace;
}

PropertyBox.prototype.increaseWordSpace = function(id)
{
this.wordspace+=1;
document.getElementById(id).style.wordSpacing=wordspace;
}

PropertyBox.prototype.decreaseWordSpace = function(id)
{
wordspace=wordspace-1;
document.getElementById(id).style.wordSpacing=wordspace;
}


//Linebreak preservance
PropertyBox.prototype.WhiteSpace = function(id)
{
this.whitespace*=-1;
if(this.whitespace>0)
{
document.getElementById(id).style.whiteSpace="pre";
}
else{
document.getElementById(id).style.whiteSpace="normal";
}
}

PropertyBox.prototype.setLineBreak = function(id)
{
this.linebreak*=-1;
if(this.linebreak>0)
{
document.getElementById(id).style.whiteSpace="nowrap";
}
else{
	document.getElementById(id).style.whiteSpace="normal";
	}
}


// Text transformation fucntions


PropertyBox.prototype.setUppercase = function(id)
{
	document.getElementById(id).style.textTransform="uppercase";
}

PropertyBox.prototype.setLowercase = function(id)
{
	document.getElementById(id).style.textTransform="lowercase";
}

PropertyBox.prototype.capitalize = function(id)
{
	document.getElementById(id).style.textTransform="capitalize";
}

PropertyBox.prototype.transformNone = function(id)
{
	document.getElementById(id).style.textTransform="none";
}


PropertyBox.prototype.setTextIndentIncrease = function(id)
{
	this.textindent+=5;
	document.getElementById(id).style.textIndent=textindent;
}

PropertyBox.prototype.setTextIndentDecrease = function(id)
{
	this.textindent-=5;
	document.getElementById(id).style.textIndent=textindent;
}

// Direction Function
PropertyBox.prototype.r2L = function(id)
{
	document.getElementById(id).style.direction="rtl";
}

PropertyBox.prototype.l2R = function(id)
{
	document.getElementById(id).style.direction="ltr";
}

// Shadow fucntions
PropertyBox.prototype.setFontShadow = function(id)
{
	document.getElementById(id).style.textShadow="5px 5px 1px #ff0000,10px 10px 1px #0000ff";
}

PropertyBox.prototype.removeFontShadow = function(id)
{
	document.getElementById(id).style.textShadow="none";
}

//reset button

PropertyBox.prototype.setFontReset = function(id) 
{
document.getElementById(id).style.font="normal normal 20px Times New Roman";
document.getElementById(id).style.textDecoration="none";
document.getElementById(id).style.whiteSpace="normal";
document.getElementById(id).style.textAlign="left";
document.getElementById(id).style.wordSpacing=0;
document.getElementById(id).style.letterSpacing=1;
document.getElementById(id).style.lineHeight=1;
document.getElementById(id).style.textShadow="none";
document.getElementById(id).style.textIndent=1;
document.getElementById(id).style.direction="ltr";
  
}


PropertyBox.prototype.clickResponder = function(id) {
	
var type = $('#'+id).type;

if(type!='img') 
{

this.textPropertiesBinder(id);
this.textSegmentTransitionInitializer();
this.propertyBoxTransition();




}
	
	
	
	
}






