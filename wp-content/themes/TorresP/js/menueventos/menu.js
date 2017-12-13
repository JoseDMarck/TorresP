$(function(){
  
var pathname = window.location.pathname;
console.log(pathname);

// Especiales 
if(pathname.includes("especiales")){
	$(".marcador").removeClass("marcador_on");
	$(".menu_h_2").addClass("marcador_on");
}

//VIDEOS
else if(pathname.includes("videos")){
	$(".marcador").removeClass("marcador_on");
	$(".menu_h_3").addClass("marcador_on");
}

else if(pathname.includes("noticias")){
	$(".marcador").removeClass("marcador_on");
	$(".menu_h_4").addClass("marcador_on");
}


else{
  // ...
}





    


});

 