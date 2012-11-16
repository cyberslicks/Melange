function Toolbar(surface) {
	
	
this.toggleBinder();	
this.surfaceObject = surface;	
this.clickBinder();
this.modalBinder();
document.getElementById('switch-icon').value= -1;
alert("lol");
	
}

Toolbar.prototype.toggleBinder = function() {
	
	$("#toolbar-icon").click(function(){
	
	if(document.getElementById('switch-icon').value==1)
	{
		document.getElementById('switch-icon').src = "./images/switch-off.png";
		document.getElementById('switch-icon').value = -1;
		
	}
	else
	{
		document.getElementById('switch-icon').src = "./images/switch-on.png";
		document.getElementById('switch-icon').value= 1;
	}
	
	
	$("#vertical-list").fadeToggle("10");
			  });
	
}

Toolbar.prototype.modalBinder = function () {
	
 
 	$('#modal-profile').css('top',"200px");
 	$('#modal-profile').css('left',$('#img').offset().left+50+"px");
 
 
    $('#modal-close-profile, #modal-lightsout').click(function() {
        $('#modal-profile').fadeOut("slow");
        $('#modal-lightsout').fadeOut("slow");
    });
	
	
}





Toolbar.prototype.clickBinder = function() {
	
		document.getElementById("a").onclick = $.proxy(function(){ this.createA(this.surfaceObject);},this);
		document.getElementById("p").onclick = $.proxy(function(){ this.createP(this.surfaceObject);},this);
		document.getElementById("aside").onclick=$.proxy(function(){ this.createAside(this.surfaceObject);},this);
		document.getElementById("section").onclick = $.proxy(function(){ this.createSection(this.surfaceObject);},this);
		//document.getElementById("text").onclick = $.proxy(function(){ this.createText(this.surfaceObject);},this);

		document.getElementById("img").onclick = $.proxy(function(){ this.createImage(this.surfaceObject);},this);
	
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

Toolbar.prototype.createImage = function(surf) {
	
	
$('#modal-profile').fadeIn("slow");
 $('#modal-lightsout').fadeTo("slow", .9);	
	
	
	
	
	
}

