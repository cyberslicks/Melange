/*

psych0der work_space




*/


function PropertyObject() {
	
	this.id = null;
	this.height = null;
	this.width = null;
	
	this.left = null;
	this.top = null;
	this.type=null;
	
}





PropertyObject.prototype.loadObject = function (id) {

this.id = id;
this.height = $('#'+this.id).height();
this.width = $('#'+this.id).width();

var offset = $('#'+this.id).offset();
this.left = offset.left;
this.top = offset.top 
this.type=$('#'+this.id).type;// subject to change
};



function PropertyPane() {

this.id = "cssbox";

this.leftOffset = $('#'+this.id).offset().left;
this.topOffset  = $('#'+this.id).offset().top;


this.width = $('#'+this.id).width();
this.height = $('#'+this.id).height();

this.opacity=0.8;

};



PropertyPane.localObject =  new PropertyObject(); // static member





PropertyPane.OnMouseOverResponder= function(event) {
	
  
    var $marginLefty = $('#'+this.id);
    $marginLefty.animate({
      marginLeft: parseInt($marginLefty.css('marginLeft'),10) == 0 ?
        $marginLefty.outerWidth() :
        0
    });
	
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
	
	
	newElement.setAttribute("class","ui-widget-content");
	
	
	newElement.addEventListener('click',Surface.clickResponder,false);     // binding click events to clcik response handler
	newElement.addEventListener('dragstart',Surface.dragEventHandler,false);
	
	$('#'+this.id).append(newElement);
	
	$('#'+newElement.id).resizable();// jquery-ui dependency: resizing function
	
	
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



