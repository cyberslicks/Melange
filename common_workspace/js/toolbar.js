function Toolbar(surface) {
	
	
this.toggleBinder();	
this.surfaceObject = surface;	
this.clickBinder();
	
}

Toolbar.prototype.toggleBinder = function() {
	
	$("#toolbar-icon").click(function(){
	$("#vertical-list").fadeToggle("10");
			  });
	
}

Toolbar.prototype.clickBinder = function() {
	
		document.getElementById("a").onclick = $.proxy(function(){ this.createA(this.surfaceObject);},this);
		document.getElementById("p").onclick = $.proxy(function(){ this.createP(this.surfaceObject);},this);
		document.getElementById("aside").onclick=$.proxy(function(){ this.createAside(this.surfaceObject);},this);
		document.getElementById("section").onclick = $.proxy(function(){ this.createSection(this.surfaceObject);},this);
		document.getElementById("text").onclick = $.proxy(function(){ this.createText(this.surfaceObject);},this);

	
	
}

Toolbar.prototype.createA = function(surf) {
	
	
	surf.createObject('a',{href:"#"});

}

Toolbar.prototype.createP = function(surf) {
	
	
	surf.createObject('p');

}

Toolbar.prototype.createAside = function(surf) {
	
	
	surf.createObject('aside');

}

Toolbar.prototype.createSection = function(surf) {
	
	
	surf.createObject('section');

}

Toolbar.prototype.createText = function(surf) {
	
	
	surf.createObject('input',{type:"text"});

}


