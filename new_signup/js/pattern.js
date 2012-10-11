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

context.Pattern.abstractFactory = Pattern.abstractFactory = {};
Pattern.abstractFactory = Backbone.Model.extend({
	
initialize : function() {
	
	this.set("description","Abstract Factory");
	this.set("name","Abstract Factory");
	this.set("supportedProductFamilies",0);
	this.set("productFamilyNames",[]);
	this.set("productFamilyImplementationList",[]);
	this.set("concreteFactory","NO");
	
	
},

incrementProductFamilies : function() {
	
	this.supportedObjectFamilies++;
	
},

addProductFamily : function(productFamilyName) {
	this.productFamilyNames[this.supportedProductFamilies] =productFamilyName;
	this.incrementProductFamilies();
},

addProductFamilyImplementation:function(productFamilyName) {
	
	this.productFamilyImplementationList[productFamilyName] ='YES';
}  // call this method from the subclasses extending this factory
	
});
	







})();   // self invoking function call