$(document).ready(function() {

	/////////////////////
	// Svg fallbacks
	/////////////////////
	if(!Modernizr.svg) {
		//checksvg();
	}

	/////////////////////
	// Menu mobile
	/////////////////////
	if($("#hamburger").size() > 0){
		var hamburger = $("#hamburger");
		var navigation = $("#navigation");
		hamburger.on("click",function(e){
			e.preventDefault();
			if(navigation.hasClass('show')){
				navigation.removeClass('show'); 
			}
			else{
				navigation.addClass('show'); 
			}
		});
	}
});//ready
