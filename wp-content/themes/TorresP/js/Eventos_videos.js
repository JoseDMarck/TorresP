
var tag;
var firstScriptTag;
var player;
$video_id = "qJbDZUXMuT8";


$(".btn_ver_video").click(function(ev){
    
    $(".ContenedorVideo").fadeIn();
       
    $video_id = $(this).attr('class').split(' ')[1];
     
   
    player.loadVideoById("qJbDZUXMuT8");


    
     
});


$(".btn_close").click(function(ev){
    $(".ContenedorVideo").fadeOut();
    stopVideo();
    tag = null;

});





  
     tag = document.createElement('script');
   
    
    tag.src = "https://www.youtube.com/iframe_api";
    firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


    // 3. This function creates an <iframe> (and YouTube player)
   
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', { 
          videoId: 'efEL5BvLq3k',
          events: {
            'onStateChange': onPlayerStateChange
         }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
        console.log("Estoy on onPlayerReady");
    }

    // 5. The API calls this function when the player's state changes.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          //setTimeout(stopVideo, 2000);
          console.log("Estoy on onPlayerStateChange");
          done = true;
        }
    }
      

    function PlayVideo() {
      player.playVideo();
    }

    function stopVideo() {
      player.stopVideo();
       

    }
 







