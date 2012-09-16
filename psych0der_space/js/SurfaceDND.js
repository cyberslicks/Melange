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
this.height = $('#'+this.id).height();
this.width = $('#'+this.id).width();

var offset = $('#'+this.id).offset();
this.left = offset.left;
this.top = offset.top 



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
	
	var leftOffset = $('#'+event.target.id).offset().left;
	var topOffset = $('#'+event.target.id).offset().top;
	alert(leftOffset);
	
	var rightBoundry = parseInt(leftOffset,10) + parseInt(event.target.style.width,10);
	var bottomBoundry = parseInt(topOffset,10) + parseInt(event.target.style.height,10);
	
	
	
	if(offx < (parseInt(leftOffset,10)+5))
	{
		caller.style.left =  parseInt(leftOffset,10)+5+'px';
	
	}
	
	else if(offx + parseInt(caller.style.width,10) > rightBoundry) 
		{	
		caller.style.left = rightBoundery - parseInt(caller.style.width,10);
		}
	else
	{
	caller.style.left =  offx + 'px';
	
	}

	if(offy < (parseInt(topOffset,10)+5))
		caller.style.top =  parseInt(this.topOffset,10)+5+'px';
	else
	caller.style.top =  offy + 'px';


	event.preventDefault();
	return false;

		
	
};



Surface.prototype.createObject = function(type) {

	
	newElement = document.createElement(type);
	newElement.id = this.idPrefix + this.idNumber;
	this.incrementIdNumber();
	Surface.incrementZIndex();
	
	newElement.draggable = "true";
	
	newElement.style.position = "absolute";
	
	newElement.style.left = parseInt(this.leftOffset,10)+5+"px";
	newElement.style.top = parseInt(this.topOffset,10)+5+"px";
	newElement.style.zIndex = parseInt(this.maximumZIndex,10);
	newElement.style.padding = "2px";
	newElement.style.border="thin solid #ccc";
	
	newElement.innerHTML = "Object ID :" + newElement.id ;
	
	
	
	newElement.addEventListener('click',Surface.clickResponder,false);     // binding click events to clcik response handler
	newElement.addEventListener('dragstart',Surface.dragEventHandler,false);
	
	$('#'+this.id).append(newElement);
	Surface.localObject.loadObject(newElement.id);
	
	
};


Surface.prototype.eventBinder = function() {
	
	
	
	document.getElementById(this.id).addEventListener('dragover',this.dragOverEventHandler,false);
	document.getElementById(this.id).addEventListener('drop',this.dropEventHandler,false);
	
	
};

Surface.prototype.deleteObject = function(id) {
	
	$('#'+this.id).remove(id); 		// object deleted
	
	
}



