$(document).ready(function(){


// CARROUSEL ESPECIALES ===================================

 

	$('.carousel').carousel();

 

	// next event
	$(".btn_next_Esp").click(function(){
    	$('.carousel').carousel('next');
	});

	// prev event
	$(".btn_prev_Esp").click(function(){
		$('.carousel').carousel('prev');
	});




$( window ).resize(function() {
	console.log("resize");
	$('.carousel').carousel('destroy');
    $('.carousel').carousel();
});


// CARROUSEL NOTIICAS ===================================



});

 