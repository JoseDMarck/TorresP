// bind 'myForm' and provide a simple callback function 
(function( $ ) {

$('.contacto_form').ajaxForm(function() { 
    $(".contenedorMensajeCorreo").fadeIn();
	setTimeout("window.location.reload();", 1500); 		 
}); 

})( jQuery );

	 
 