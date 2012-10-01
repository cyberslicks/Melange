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

PropertyBox.prototype.showTextProperties = function () {
	
	$('#textproperties').show();
	
	
}

PropertyBox.prototype.hidePropertyBox = function() {
	
	
	$('#textproperties').hide();
	$('#'+this.id).hide();
	
	
}

PropertyBox.prototype.refreshColorPicker = function(id) {					// for introducing dynamicity in binding color picker
	
	
	var colorpicker_id = $("#color-changer").data('colorpickerId');
	if(colorpicker_id) {
		$("#"+colorpicker_id).remove();
		$('#color-changer').removeData();

		}
		var _color = document.getElementById(id).style.color;
		document.getElementById("color-changer").style.backgroundColor = _color;
	
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


PropertyBox.prototype.refreshPropertyPane = function() {
	
	$("#SpacingContent").hide();
	$("#ShadowContent").hide();
	$("#TextTransformContent").hide();
	$("#AlignmentContent").hide();
	$("#TextDirectionContent").slideToggle("slow");
	
	
}


PropertyBox.prototype.propertyBoxTransition = function() {
	
	//this.hidePropertyBox();
	this.refreshPropertyPane();
	$('#'+this.id).fadeIn(300);
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
	
document.getElementById("FontInc").onclick = $.proxy(function(){ this.increaseFontSize(id);},this);
//document.getElementById("FontInc").addEventListener('click',$.proxy(function(){ this.increaseFontSize(id);},this),false);

document.getElementById("Fontdec").onclick = $.proxy(function(){ this.decreaseFontSize(id);},this);
document.getElementById("Bold").onclick = $.proxy(function(){ this.setFontBold(id);},this);
document.getElementById("Italic").onclick=$.proxy(function(){ this.setFontItalic(id);},this);
document.getElementById("Underline").onclick = $.proxy(function(){ this.setFontUnderline(id);},this);
document.getElementById("Overline").onclick = $.proxy(function(){ this.setFontOverline(id);},this);
document.getElementById("Linethrough").onclick = $.proxy(function(){ this.setFontlinethrough(id);},this);

this.refreshColorPicker(id);
this.colorPickerBinder("color-changer",id,1);

document.getElementById("fontface").onclick = $.proxy(function(){ this.setFontFace(id);},this);	

document.getElementById("Left").onclick = $.proxy(function(){ this.setFontAlignLeft(id);},this);
document.getElementById("Center").onclick = $.proxy(function(){ this.setFontAlignCenter(id);},this);	
document.getElementById("Right").onclick = $.proxy(function(){ this.setFontAlignRight(id);},this);	
document.getElementById("Whitespace").onclick = $.proxy(function(){ this.WhiteSpace(id);},this);	
document.getElementById("Linebreak").onclick = $.proxy(function(){ this.setLineBreak(id);},this);

document.getElementById("LineInc").onclick = $.proxy(function(){ this.increaseLineSpace(id);},this);
document.getElementById("LineDec").onclick = $.proxy(function(){ this.decreaseLineSpace(id);},this);

document.getElementById("LetterInc").onclick = $.proxy(function(){ this.increaseLetterSpace(id);},this);
document.getElementById("LetterDec").onclick = $.proxy(function(){ this.decreaseLetterSpace(id);},this);

document.getElementById("WordInc").onclick = $.proxy(function(){ this.increaseWordSpace(id);},this);
document.getElementById("WordDec").onclick = $.proxy(function(){ this.decreaseWordSpace(id);},this);

document.getElementById("uppercase").onclick = $.proxy(function(){ this.setUppercase(id);},this);
document.getElementById("lowercase").onclick = $.proxy(function(){ this.setLowercase(id);},this);
document.getElementById("capitalize").onclick = $.proxy(function(){ this.capitalize(id);},this);
document.getElementById("normal").onclick = $.proxy(function(){ this.transformNone(id);},this);

document.getElementById("TextIndentInc").onclick = $.proxy(function(){ this.setTextIndentIncrease(id);},this);
document.getElementById("TextIndentDec").onclick = $.proxy(function(){ this.setTextIndentDecrease(id);},this);

document.getElementById("Right-Left").onclick = $.proxy(function(){ this.r2L(id);},this);
document.getElementById("Left-Right").onclick = $.proxy(function(){ this.l2R(id);},this);

document.getElementById("AddShadow").onclick = $.proxy(function(){ this.setFontShadow(id);},this);
document.getElementById("RemoveShadow").onclick = $.proxy(function(){ this.removeFontShadow(id);},this);

document.getElementById("Reset").onclick = $.proxy(function(){ this.setFontReset(id);},this);


}


PropertyBox.prototype.increaseFontSize = function(id) {

 
   var p = document.getElementById(id);
   
 
      if(p.style.fontSize) {
         var s = parseInt(p.style.fontSize.replace("px",""));
      } else {
 
         var s = 16;
      }
      if(s!=this.maximumFontSize) {
 
         s += 1;
      }
      p.style.fontSize = s+"px"
 
   
}

PropertyBox.prototype.decreaseFontSize = function(id) {
   var p = document.getElementById(id);
   
 
      if(p.style.fontSize) {
         var s = parseInt(p.style.fontSize.replace("px",""));
      } else {
 
         var s = 16;
      }
      if(s!=this.minimumFontSize) {
 
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
document.getElementById(id).style.lineHeight=this.linespace+"px";
}

PropertyBox.prototype.decreaseLineSpace = function(id)
{
this.linespace-=0.25;
document.getElementById(id).style.lineHeight = this.linespace+"px";
}

PropertyBox.prototype.decreaseLetterSpace = function(id)
{
this.letterspace-=1;
document.getElementById(id).style.letterSpacing = this.letterspace+"px";
}

PropertyBox.prototype.increaseLetterSpace = function(id)
{
this.letterspace+=1;
document.getElementById(id).style.letterSpacing = this.letterspace+"px";


}

PropertyBox.prototype.increaseWordSpace = function(id)
{
this.wordspace+=1;
document.getElementById(id).style.wordSpacing = this.wordspace+"px";
}

PropertyBox.prototype.decreaseWordSpace = function(id)
{
this.wordspace-=1;
document.getElementById(id).style.wordSpacing = this.wordspace+"px";
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
	document.getElementById(id).style.textIndent=this.textindent+"px";
}

PropertyBox.prototype.setTextIndentDecrease = function(id)
{
	this.textindent-=5;
	document.getElementById(id).style.textIndent=this.textindent+"px";
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
document.getElementById(id).style.font="normal normal 16px Times New Roman";
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
	
this.hidePropertyBox();
//this.propertyBoxTransition();
var type = document.getElementById(id).type;


if(type!='img') 
{
this.textSegmentTransitionInitializer();
this.textPropertiesBinder(id);
this.showTextProperties();


}

}






