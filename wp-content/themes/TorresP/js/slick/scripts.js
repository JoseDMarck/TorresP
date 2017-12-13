$(document).on('ready', function() {
     
      $(".center").slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
         variableWidth: true,
        autoplay: true,
  		autoplaySpeed: 8000
      });


      //Slider Especiales
       $(".especiales").slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
         variableWidth: true,
        autoplay: true,
      autoplaySpeed: 8000
      });


      $(".noticiasSlide").slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
         variableWidth: true,
        autoplay: false,
      autoplaySpeed: 8000
      
      });


    
    });