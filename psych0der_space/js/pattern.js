(function(){
	


if(!Backbone)
	{
	
	alert("Backbone.js not loaded");	
	return;
	}

context = this;

var Pattern = context.Pattern = {} ; /*Initializing empty object can be used for checking script availabilty  */
Pattern.VERSION = '0.0.1';



Pattern.availablePatterns = ['Abstract Factory'];



Pattern.abstractFactory = Backbone.Model.extend({
	
description:"Abstract Factory",

setDescription : function(desc) {
	
	this.description = desc;
	
},

getDescription:function() {
	return this.description;
	},

name : "Abstract Factory",

setName: function(argname) {
	
	this.name = argname;
},


suportedProductFamilies :0,
productFamilyNames : [],
productFamilyImplementationList :[],


incrementProductFamilies : function() {
	
	this.supportedObjectFamilies++;
	
},

addProductFamily : function(productFamilyName) {
	this.productFamilyNames[this.supportedProductFamilies] =productFamilyName;
	this.incrementProductFamilies();
},
concreteFactory :'NO',

addProductFamilyImplementation:function(productFamilyName) {
	
	this.productFamilyImplementationList[productFamilyName] : 'YES';
}  // call this method from the subclasses extending this factory
	
});
	

alert('function loaded');


})();   // self invoking function call