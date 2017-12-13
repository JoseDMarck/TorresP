$(".menu_icon").click(function(event) {
	event.stopPropagation();

	if ($(".menu_box").css('display') == 'none' ){
		$(".menu_box").fadeIn();
	}

	else{
		$(".menu_box").fadeOut();
		$(".submenu").hide();
   		$(".t_menu").show();
     	$(".t_menu_on").hide();
	}

});




// OOCULTAMOS EL MENU AL DAR CLICK EN CUALQUIER PARTE
$(window).click(function() {
     
    $(".menu_box").fadeOut();
	$(".submenu").hide();
   	$(".t_menu").show();
    $(".t_menu_on").hide();

});


$(".m_Bloques").click(function(event) {
	event.stopPropagation();
	
	if ( $(this).find(".submenu").css('display') == 'none' ){
   		
   		// 1.- Escondemos y desactivamos los menus
   		$(".submenu").hide();
   		$(".t_menu").show();
     	$(".t_menu_on").hide();

     	// 2.- Ejecutamos los eventos del menu
   		$(this).find(".submenu").fadeIn();
     	$(this).find(".t_menu").hide();
     	$(this).find(".t_menu_on").show();

	}
	else{

		// 1.- Escondemos y desactivamos los menus
		$(".submenu").hide();
		$(".t_menu").show();
     	$(".t_menu_on").hide();

		// 2.- Ejecutamos los eventos del menu
	   	$(this).find(".submenu").hide();
     	$(this).find(".t_menu").show();
     	$(this).find(".t_menu_on").hide();

     	

	}
     
});