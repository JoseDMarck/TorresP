 

$(".SearchIcon").click(function(event){
    event.stopPropagation();
   

    if ($(".contenedor_busqueda").css('display') == 'none' ){
    $(".contenedor_busqueda").fadeIn();
  }

  else{
    $(".contenedor_busqueda").fadeOut();
  }


});


$(".contenedor_busqueda").click(function(event){
    event.stopPropagation();
});


// OOCULTAMOS EL MENU AL DAR CLICK EN CUALQUIER PARTE
$(window).click(function() {
  $(".contenedor_busqueda").fadeOut();
});



 







