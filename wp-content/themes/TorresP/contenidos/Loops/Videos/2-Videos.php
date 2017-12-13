

<div class="ContenidorSeccion">
   <div class="BlurTop2"></div>


    <div class="TituloSeccionMeta">
        VIDEOS
    </div><!-- TituloSección-->


    
    <div class="contenedorEspecialesGeneral">
    	
    	<?php 
		$temp = $wp_query; 
		  $wp_query = null; 
		  $wp_query = new WP_Query(); 
		  $wp_query->query('showposts=9&post_type=post&category_name=C-video'.'&paged='.$paged); 
		  while ($wp_query->have_posts()) : $wp_query->the_post(); 
		  $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));
		  ?>
		
		
		
		<div class="BloquesNoticias">
		    <div class="imagen">
        	<div class="btn_play_video <?php echo $video_youtube ?>"></div>		    	

		   
          		<div class="overlayEspeciales"></div>
         

		    		<?php the_post_thumbnail('cienciario-size'); ?>	

		    </div><!--imagen -->

		    <div class="titulo">
		    	 	<a href="<?php  echo the_permalink(); ?>">
              		<?php the_title(); ?>
            </a>
             
		    </div><!--titulo -->

          <div class="descripcion DescEspecialesNormal">
                <?php echo $extracto = postExtracto($post_id);  ?>
          </div>

          <div class="descripcion DescEspecialeMovil">
                <?php echo $extracto_corto = propuestasExtractoSliderCorto($post_id); ?>
          </div>

		</div><!-- BloquesNoticias -->
		
		
		
<?php endwhile; ?>
		 
<div style="clear: both;"></div>


<div class="PaginacionPost">
  <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>
</div><!-- PaginacionPost -->
 

    </div><!-- contenedorEspecialesGeneral -->


 


</div><!-- ContenedorSección -->

   <div class="video_player_contenedor">
    <div class="btn_close_video"></div>
    <div class="contenedorVideo">
        
        <div id="player"></div>

    </div>
  </div><!-- video_player_contenedor -->
