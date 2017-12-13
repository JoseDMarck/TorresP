<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slick/slick-theme.css">
 

<div class="btn_prev_Esp"></div>
<div class="btn_next_Esp"></div>
<div class="carousel carouselEspeciales">



  <?php 
  $my_query = new WP_Query();
  $my_query = new WP_Query( array('post_type' => 'post', 'category_name' =>'C-Especiales', 'posts_per_page' => 9, 'order' => 'DESC', 'paged'=> $paged )); 
  while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
  $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));
  ?>


    <div class=" carousel-item bloquesCarrousel bloqueA">
        
            <div class="bloquesSlickSlider-Especiales">
        <div class="imagen">
        <a href="<?php echo the_permalink(); ?>">
          <div class="overlayEspeciales"></div>
        </a>
          
            <?php the_post_thumbnail('cienciario-size'); ?>
          
        </div> <!-- imagen -->

        <div class="textos">
          
          <div class="titulo">
            <a href="<?php echo the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </div>

          


        </div> <!-- textos -->


    </div>


    </div><!-- bloqueCarrousel -->



  <?php endwhile; ?>  
    
  </div>
