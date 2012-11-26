
//alert(Pattern.VERSION);
var carAbstractFactory = new Pattern.abstractFactory();
alert(carAbstractFactory.get("description"));



var ncl = Pattern.abstractFactory.extend({
	//initialize : function() {
		
	//ncl.__super__.initialize.call(this);
	//this.set("name","polo");	
		
	//}
	
});

var poloFactory = carAbstractFactory.extend();










