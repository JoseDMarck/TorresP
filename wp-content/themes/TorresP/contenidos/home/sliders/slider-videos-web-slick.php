<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slick/slick-theme.css">
 


  <section class="center slider">



  <?php 
  $my_query = new WP_Query();
  $my_query = new WP_Query( array('post_type' => 'post', 'category_name' =>'C-video', 'posts_per_page' => 9, 'order' => 'DESC', 'paged'=> $paged )); 
  while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
  $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));
  ?>



    <div class="bloquesSlickSlider">
        <div class="imagen">
        <div class="overlayVideo"></div>
        <div class="btn_play_video <?php echo $video_youtube ?>"></div>
            <?php the_post_thumbnail('cienciario-size'); ?>
        </div> <!-- imagen -->

        <div class="textos">
          
          <div class="titulo">
            <a href="<?php echo the_permalink();?>">
              <?php the_title(); ?>
              </a>
          </div>

          <div class="descripcion">
            <span class="sliderOnWeb"> <?php echo $extracto = postExtracto($post_id);  ?></span>
            <span class="sliderOnMovil"><?php echo $extracto_corto = propuestasExtractoSliderCorto($post_id); ?></span>
          </div>



        </div> <!-- textos -->


    
    </div>
    
   
      <?php endwhile; ?>  
    
     
  </section>

   <div class="video_player_contenedor">
    <div class="btn_close_video"></div>
    <div class="contenedorVideo">
        
        <div id="player"></div>

    </div>
  </div><!-- video_player_contenedor -->


