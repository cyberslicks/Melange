function PropertyBox(id) {
	
this.id = id;
/*initialization of content*/ 
 
 /* toggle keys */
this.textpaddingleft=0;
this.textpaddingright=0;
this.textpaddingtop=0;
this.textpaddingbottom=0; 
this.textmarginleft=0;
this.textmarginright=0;
this.textmargintop=0;
this.textmarginbottom=0; 
this.vspacevalue =0;
this.hspacevalue =0;
this.imageheight=100;
this.imagewidth=100;
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
/*calling the intializer foa all the attribute*/
this.textSegmentTransitionInitializer();
this.ImageSegmentTransitionInitializer();	
}



PropertyBox.prototype.refreshColorPicker = function(id) {					// for introducing dynamicity in binding color picker
	
	/*color changer=the id of color of box shown*/
	var colorpicker_id = $("#color-changer").data('colorpickerId');
	if(colorpicker_id) {
		$("#"+colorpicker_id).remove();
		$('#color-changer').removeData();

		}
		var _color = document.getElementById(id).style.color;
		document.getElementById("color-changer").style.backgroundColor = _color;
	
}

PropertyBox.prototype.colorPickerBinder = function(previewId,targetId,targetType) {
			/*calling every time we use colorpicker*/
			
		
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

//Text Segment

		PropertyBox.prototype.showTextProperties = function () {
			
			$('#textproperties').show();
			
			
		}

		PropertyBox.prototype.hidePropertyBox = function() {
			
			/*hiding the different property boxes*/
			$('#textproperties').hide();
			$('#'+this.id).hide();
			
			
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
			  
			  $("#TextMargin").click(function(){
				$("#TextMarginContent").slideToggle("slow");
			  });
			
			  $("#TextPadding").click(function(){
				$("#TextPaddingContent").slideToggle("slow");
			  });
			
		}


		PropertyBox.prototype.refreshPropertyPane = function() {
			
			$("#SpacingContent").hide();
			$("#ShadowContent").hide();
			$("#TextTransformContent").hide();
			$("#AlignmentContent").hide();
			$("#TextDirectionContent").hide();
			
			
		}


		PropertyBox.prototype.propertyBoxTransition = function() {
			
			//this.hidePropertyBox();
			this.refreshPropertyPane();
			$('#'+this.id).fadeIn(300);
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

		document.getElementById("TextMarginLeftInc").onclick = $.proxy(function(){ this.TextMarginLeftIncrease(id);},this);
		document.getElementById("TextMarginLeftDec").onclick = $.proxy(function(){ this.TextMarginLeftDecrease(id);},this);	
		document.getElementById("TextMarginRightInc").onclick = $.proxy(function(){ this.TextMarginRightIncrease(id);},this);
		document.getElementById("TextMarginRightDec").onclick = $.proxy(function(){ this.TextMarginRightDecrease(id);},this);
		document.getElementById("TextMarginTopInc").onclick = $.proxy(function(){ this.TextMarginTopIncrease(id);},this);
		document.getElementById("TextMarginTopDec").onclick = $.proxy(function(){ this.TextMarginTopDecrease(id);},this);
		document.getElementById("TextMarginBottomInc").onclick = $.proxy(function(){ this.TextMarginBottomIncrease(id);},this);
		document.getElementById("TextMarginBottomDec").onclick = $.proxy(function(){ this.TextMarginBottomDecrease(id);},this);
		
		document.getElementById("TextPaddingLeftInc").onclick = $.proxy(function(){ this.TextPaddingLeftIncrease(id);},this);
		document.getElementById("TextPaddingLeftDec").onclick = $.proxy(function(){ this.TextPaddingLeftDecrease(id);},this);	
		document.getElementById("TextPaddingRightInc").onclick = $.proxy(function(){ this.TextPaddingRightIncrease(id);},this);
		document.getElementById("TextPaddingRightDec").onclick = $.proxy(function(){ this.TextPaddingRightDecrease(id);},this);
		document.getElementById("TextPaddingTopInc").onclick = $.proxy(function(){ this.TextPaddingTopIncrease(id);},this);
		document.getElementById("TextPaddingTopDec").onclick = $.proxy(function(){ this.TextPaddingTopDecrease(id);},this);
		document.getElementById("TextPaddingBottomInc").onclick = $.proxy(function(){ this.TextPaddingBottomIncrease(id);},this);
		document.getElementById("TextPaddingBottomDec").onclick = $.proxy(function(){ this.TextPaddingBottomDecrease(id);},this);
		
		
		document.getElementById("Reset").onclick = $.proxy(function(){ this.setFontReset(id);},this);
		
		}

		// Text functions descriptions
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
			
		//Margin Function
				
		PropertyBox.prototype.TextMarginLeftIncrease = function(id)
		{
		this.textmarginleft+=5;
			document.getElementById(id).style.marginLeft=this.textmarginleft+"px";
		}
		
		PropertyBox.prototype.TextMarginLeftDecrease = function(id)
		{
		this.textmarginleft-=5;
			document.getElementById(id).style.marginLeft=this.textmarginleft+"px";
		}
		
		PropertyBox.prototype.TextMarginRightIncrease = function(id)
		{
		this.textmarginright+=5;
			document.getElementById(id).style.marginRight=this.textmarginright+"px";
		}
		
		PropertyBox.prototype.TextMarginRightDecrease = function(id)
		{
		this.textmarginright-=5;
			document.getElementById(id).style.marginRight=this.textmarginright+"px";
		}
		
		PropertyBox.prototype.TextMarginTopIncrease = function(id)
		{
		this.textmargintop+=5;
			document.getElementById(id).style.marginTop=this.textmargintop+"px";
		}
		
		PropertyBox.prototype.TextMarginTopDecrease = function(id)
		{
		this.textmargintop-=5;
			document.getElementById(id).style.marginTop=this.textmargintop+"px";
		}
		
		PropertyBox.prototype.TextMarginBottomIncrease = function(id)
		{
		this.textmarginbottom+=5;
			document.getElementById(id).style.marginBottom=this.textmarginbottom+"px";
		}
		
		PropertyBox.prototype.TextMarginBottomDecrease = function(id)
		{
		this.textmarginbottom-=5;
			document.getElementById(id).style.marginBottom=this.textmarginbottom+"px";
		}
		
		
		//Padding Function
				
		PropertyBox.prototype.TextPaddingLeftIncrease = function(id)
		{
		this.textpaddingleft+=5;
			document.getElementById(id).style.paddingLeft=this.textpaddingleft+"px";
		}
		
		PropertyBox.prototype.TextPaddingLeftDecrease = function(id)
		{
		this.textpaddingleft-=5;
			document.getElementById(id).style.paddingLeft=this.textpaddingleft+"px";
		}
		
		PropertyBox.prototype.TextPaddingRightIncrease = function(id)
		{
		this.textpaddingright+=5;
			document.getElementById(id).style.paddingRight=this.textpaddingright+"px";
		}
		
		PropertyBox.prototype.TextPaddingRightDecrease = function(id)
		{
		this.textpaddingright-=5;
			document.getElementById(id).style.paddingRight=this.textpaddingright+"px";
		}
		
		PropertyBox.prototype.TextPaddingTopIncrease = function(id)
		{
		this.textpaddingtop+=5;
			document.getElementById(id).style.paddingTop=this.textpaddingtop+"px";
		}
		
		PropertyBox.prototype.TextPaddingTopDecrease = function(id)
		{
		this.textpaddingtop-=5;
			document.getElementById(id).style.paddingTop=this.textpaddingtop+"px";
		}
		
		PropertyBox.prototype.TextPaddingBottomIncrease = function(id)
		{
		this.textpaddingbottom+=5;
			document.getElementById(id).style.paddingBottom=this.textpaddingbottom+"px";
		}
		
		PropertyBox.prototype.TextPaddingBottomDecrease = function(id)
		{
		this.textpaddingbottom-=5;
			document.getElementById(id).style.paddingBottom=this.textpaddingbottom+"px";
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
		document.getElementById(id).style.color="#000000";  
		}
//Text segment ends here

//Image segment Starts here
		
		PropertyBox.prototype.showImageProperties = function () {
			
			$('#imageproperties').show();
			
			
		}

		PropertyBox.prototype.hidePropertyBox = function() {
			
			/*hiding the different property boxes*/
			$('#imageproperties').hide();
			$('#'+this.id).hide();
			
			
		}
		
		PropertyBox.prototype.refreshimagePropertyPane = function() {
			
					
		}


		PropertyBox.prototype.imagepropertyBoxTransition = function() {
			
			//this.hidePropertyBox();
			this.refreshimagePropertyPane();
			$('#'+this.id).fadeIn(300);
		}
		
		
		PropertyBox.prototype.imagePropertiesBinder = function(id) {
			
		document.getElementById("ImageLeft").onclick = $.proxy(function(){ this.setImageAlignLeft(id);},this);
		document.getElementById("ImageMiddle").onclick = $.proxy(function(){ this.setImageAlignMiddle(id);},this);
		document.getElementById("ImageRight").onclick = $.proxy(function(){ this.setImageAlignRight(id);},this);
		document.getElementById("ImageTop").onclick = $.proxy(function(){ this.setImageAlignTop(id);},this);
		document.getElementById("ImageBottom").onclick = $.proxy(function(){ this.setImageAlignBottom(id);},this);
		
		document.getElementById("ImageHeightInc").onclick = $.proxy(function(){ this.increaseImageHeight(id);},this);
		document.getElementById("ImageHeightDec").onclick = $.proxy(function(){ this.decreaseImageHeight(id);},this);
		document.getElementById("ImageWidthInc").onclick = $.proxy(function(){ this.increaseImageWidth(id);},this);
		document.getElementById("ImageWidthDec").onclick = $.proxy(function(){ this.decreaseImageWidth(id);},this);
		
		document.getElementById("ImageHSpaceInc").onclick = $.proxy(function(){ this.increaseImageHSpace(id);},this);
		document.getElementById("ImageHSpaceDec").onclick = $.proxy(function(){ this.decreaseImageHSpace(id);},this);
		document.getElementById("ImageVSpaceInc").onclick = $.proxy(function(){ this.increaseImageVSpace(id);},this);
		document.getElementById("ImageVSpaceDec").onclick = $.proxy(function(){ this.decreaseImageVSpace(id);},this);
		
		
		
		}
		
		PropertyBox.prototype.ImageSegmentTransitionInitializer = function() {

				
			 $("#ImageAlignment").click(function(){
				$("#ImageAlignmentContent").slideToggle("slow");
			  });
			  
			$("#ImageSize").click(function(){
				$("#ImageSizeContent").slideToggle("slow");
			  });
			$("#ImageSpace").click(function(){
				$("#ImageSpaceContent").slideToggle("slow");
			  });
			
			$("#ImageSource").click(function(){
				$("#ImageSourceContent").slideToggle("slow");
			  });
			$("#ImageBorder").click(function(){
				$("#ImageBorderContent").slideToggle("slow");
			  });
			
		}
		
		
		
		
		
		
		
		//alignment adjustment
		PropertyBox.prototype.setImageAlignMiddle =function(id)
		{
		document.getElementById(id).align="center";
		
		}

		PropertyBox.prototype.setImageAlignLeft = function(id)
		{
		document.getElementById(id).align="left";
		}

		PropertyBox.prototype.setImageAlignRight = function(id)
		{
		document.getElementById(id).align="right";
		}
		
		PropertyBox.prototype.setImageAlignTop =function(id)
		{
		document.getElementById(id).align="top";
		
		}
		
		PropertyBox.prototype.setImageAlignBottom =function(id)
		{
		document.getElementById(id).align="bottom";
		
		}
		
		//border management
		
		PropertyBox.prototype.setImageBorder =function(id)
		{
		document.getElementById(id).border="2";
		
		}
		

		//height management
		
				
		PropertyBox.prototype.increaseImageHeight = function(id)
		{
		this.imageheight+=5;
		document.getElementById(id).height=this.imageheight;
		}
		
		PropertyBox.prototype.decreaseImageHeight = function(id)
		{
		this.imageheight-=5;
		document.getElementById(id).height=this.imageheight;
		}
		
		//width Management
		PropertyBox.prototype.increaseImageWidth = function(id)
		{
		this.imagewidth+=5;
		document.getElementById(id).width=this.imagewidth;
		}
		
		PropertyBox.prototype.decreaseImageWidth = function(id)
		{
		this.imagewidth-=5;
		document.getElementById(id).width=this.imagewidth;
		}
		
		
		
		
		
		//Space management
		PropertyBox.prototype.increaseImageHSpace = function(id)
		{
		this.hspacevalue+=5;
		document.getElementById(id).hspace=this.hspacevalue;
		}
		
		PropertyBox.prototype.decreaseImageHSpace = function(id)
		{
		this.hspacevalue-=5;
		document.getElementById(id).hspace=this.hspacevalue;
		}
		
		PropertyBox.prototype.increaseImageVSpace = function(id)
		{
		this.vspacevalue+=5;
		document.getElementById(id).vspace=this.vspacevalue;
		}
		
		PropertyBox.prototype.decreaseImageVSpace = function(id)
		{
		this.vspacevalue-=5;
		document.getElementById(id).vspace=this.vspacevalue;
		}
		
		//Source Management
		
		PropertyBox.prototype.setImageSource =function(id)
		{
		document.getElementById(id).src="image.jpg";
		
		}
		
		
//Image segment ends here
PropertyBox.prototype.clickResponder = function(id) {
	
this.hidePropertyBox();
this.propertyBoxTransition();
var type = document.getElementById(id).type;


if(type!='img') 
{

this.textPropertiesBinder(id);
this.showTextProperties();

}

else
{
this.imagePropertiesBinder(id);
this.showImageProperties();
}


}






