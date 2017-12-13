<div class="ContenidorSeccion">
   <div class="BlurTop2"></div>


    <div class="TituloSeccionMeta">
        NOTICIAS
    </div><!-- TituloSección-->


    
    <div class="contenedorEspecialesGeneral">

 
 
    	<?php 
		$temp = $wp_query; 
		  $wp_query = null; 
		  $wp_query = new WP_Query(); 
		  $wp_query->query('showposts=9&post_type=post&category_name=c-noticias'.'&paged='.$paged); 
		
		  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
		
		
		<div class="BloquesNoticias">
		    <div class="imagen">
		    <a href="<?php echo the_permalink(); ?>">
          		<div class="overlayEspeciales"></div>
        	</a>

		    		<?php the_post_thumbnail('cienciario-size'); ?>	

		    </div><!--imagen -->

		    <div class="titulo">
		    	<a href="<?php echo the_permalink(); ?>">
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
