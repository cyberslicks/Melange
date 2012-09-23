/*

psych0der work_space




*/


function SurfaceObject() {
	
	this.id = null;
	this.height = null;
	this.width = null;
	
	this.left = null;
	this.top = null;
	
	
	
}


SurfaceObject.prototype.informationEncoder  = function()
{
	
	var info = (event.clientX - parseInt($('#'+this.id).offset().left,10)) + 
	'$' +( event.clientY - parseInt($('#'+this.id).offset().top,10))+'$'+ this.id;

return info;
	
	
	
};


SurfaceObject.prototype.loadObject = function (id) {

this.id = id;
var object = $('#'+this.id);

this.type = object.type;
this.height = object.height();
this.width = object.width();


var offset = object.offset();
this.left = offset.left;
this.top = offset.top;
//console.log(this.left+","+$('#'+this.id).offset().left);

};

SurfaceObject.prototype.updateZIndex = function(zindex) {
	
	
	$('#'+this.id).css('z-index',parseInt(zindex,10));
	
};



function Surface() {

this.id = "surface";
this.idPrefix="sobj";
this.idNumber=1;

this.leftOffset = $('#'+this.id).offset().left;
this.topOffset  = $('#'+this.id).offset().top;


this.width = $('#'+this.id).width();
this.height = $('#'+this.id).height();


this.rightBoundry = parseInt(this.leftOffset,10) + parseInt(this.width,10);
this.bottomBoundry = parseInt(this.topOffset,10) + parseInt(this.height,10);



};

Surface.maximumZIndex = 10;      //  this corresponds to element in focus ,so that it comes to front


Surface.localObject =  new SurfaceObject(); // static member



Surface.incrementZIndex = function() {
	
	Surface.maximumZIndex++;

};

Surface.decrementZIndex = function() {
	
	Surface.maximumZIndex--;

};

Surface.prototype.incrementIdNumber = function() {
	
	this.idNumber++;
};



Surface.clickResponder= function(event) {
	
var id = event.target.id;    // id of the caller object	
Surface.localObject.loadObject(id);

if(!($('#'+id).css('z-index') == Surface.maximumZIndex))
{
	Surface.incrementZIndex();
	$('#'+id).css('z-index',parseInt(Surface.maximumZIndex,10));		//take it to top

}	
	
};


Surface.dragEventHandler = function(event) {
	
var id = event.target.id;  
Surface.localObject.loadObject(id);
//alert(Surface.localObject.top);

event.dataTransfer.setData("text/plain",Surface.localObject.informationEncoder());	
	
event.dataTransfer.dropEffect='move';

//event.preventDefault();
//return false;
	
};


Surface.prototype.dragOverEventHandler  =function(event) {
	
	
	event.dataTransfer.dropEffect = 'move';
	event.preventDefault();
	return false;
	
	
};



Surface.prototype.dropEventHandler = function(event) {

	
	
	var positionObject = event.dataTransfer.getData("text/plain").split('$');
	
	caller = document.getElementById(positionObject[2]);
	
	var offx = event.clientX - parseInt(positionObject[0],10);
	var offy = event.clientY - parseInt(positionObject[1],10);
	
		
	
	
	if(offx < (parseInt(this.leftOffset,10)+5))
	
		caller.style.left =  parseInt(this.leftOffset,10)+5+'px';
	
	
	
	else if(offx + parseInt($('#'+caller.id).width(),10) > this.rightBoundry) 
			
		caller.style.left = this.rightBoundery - parseInt($('#'+caller.id).width(),10);
		
	
	else
	
		caller.style.left =  offx + 'px';
	
	

	if(offy < (parseInt(this.topOffset,10)+5))
		caller.style.top =  parseInt(this.topOffset,10)+5+'px';
	
	else if (offy + parseInt($('#'+caller.id).height()) > this.bottomBoundry)
		caller.style.top = this.bottomBoundry - parseInt($('#'+caller.id).height(),10);
	
	else
	caller.style.top =  offy + 'px';


	event.preventDefault();
	return false;

		
	
};

Surface.prototype.addAttributes = function (id,attr) {
	
	
	var object = document.getElementById(id);
	//alert(object.ondragstart);
	
	for (var name in attr) 
	{
		if (attr.hasOwnProperty(name)) {
			
			
			object.setAttribute(name, attr[name]);	
			//alert(object.name);
			
		}
	}	
	
	
	
};




Surface.prototype.createObject = function(type,args) {

	args = args || {};   		// operation for making it optional
	
	newElement = document.createElement(type);
	newElement.id = this.idPrefix + this.idNumber;
	this.incrementIdNumber();
	Surface.incrementZIndex();
	
	newElement.draggable = "true";
	
	
	newElement.style.position = "absolute";
	
	newElement.type = type ;// adding a type property
	
	newElement.style.left = parseInt(this.leftOffset,10)+5+"px";
	newElement.style.top = parseInt(this.topOffset,10)+5+"px";
	newElement.style.zIndex = parseInt(this.maximumZIndex,10);
	newElement.style.padding = "2px";
	newElement.style.border="thin solid #ccc";
	
	newElement.innerHTML = "Object ID :" + newElement.id ;
	
	
	newElement.setAttribute("class","ui-widget-content");
	
	
	newElement.addEventListener('click',Surface.clickResponder,false);     // binding click events to clcik response handler
	newElement.addEventListener('dragstart',Surface.dragEventHandler,false);
	
	$('#'+this.id).append(newElement);
	
	this.addAttributes(newElement.id,args);
	
	if(type != "img")			// due to critical bug in jquery ui
	{
	
			$('#'+newElement.id).resizable({ stop: function(event,ui) {
				
				var surface = $('#surface');
				//alert(ui.width);
				var element = $('#'+event.target.id);
				if(ui.position.left + ui.size.width > parseInt(surface.width(),10) + 18)
				{
					
					//ui.size.width = surface.width() - ui.position.left;
					element.width(surface.width() - ui.position.left+18);
				}
				
				if(ui.position.top + ui.size.height > parseInt(surface.height(),10) + 18)
				{
										//ui.size.width = surface.width() - ui.position.left;
					element.height(surface.height() - ui.position.top+18);
				}
				
				
				
				
			} }); // jquery-ui dependency: resizing function
			//newElement.contentEditable="true";
	
	
	}
	
	
	
	Surface.localObject.loadObject(newElement.id);
	
	
};


Surface.prototype.eventBinder = function() {
	
	
	
	document.getElementById(this.id).addEventListener('dragover',this.dragOverEventHandler,false);
	document.getElementById(this.id).addEventListener('drop',$.proxy(this.dropEventHandler,this),false); //preserving namespace
	
	
};

Surface.prototype.deleteObject = function(id) {
	
	
	
	document.getElementById(this.id).removeChild(document.getElementById(id)); 		// object deleted
	$('#dustbin').effect("shake", { times:5 }, 5); 

	
};

function Dustbin() {
	
	this.name = "dustbin";
	
	
};


Dustbin.prototype.eventBinder = function () {
	
	
	document.getElementById('dustbin').addEventListener('drop',Dustbin.removeObject,false);
    document.getElementById('dustbin').addEventListener('dragover',Dustbin.dragOverHandler,false);
	
	
}

Dustbin.id = 'dustbin';

Dustbin.dragOverHandler = function(event) {
	
	
	event.dataTransfer.dropEffect = 'move';
	event.preventDefault();
	return false;

	
	
}


Dustbin.removeObject = function(event) {
	
	var callerId = event.dataTransfer.getData("text/plain").split('$');
	//alert("here");	
	var tempSurface = new Surface();
	tempSurface.deleteObject(callerId[2]);
	
	
	delete tempSurface;	
	
	event.preventDefault();
	return false;


}



