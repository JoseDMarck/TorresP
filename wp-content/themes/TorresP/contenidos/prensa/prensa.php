<div class="seccion-general">


  <div class="loop-seccion">

    <div class="titulo">
      <h1><?php echo the_title(); ?> </h1>
    </div>
    
     
    
    <div class="contenido">
    	<?php 
		$temp = $wp_query; 
		  $wp_query = null; 
		  $wp_query = new WP_Query(); 
		  $wp_query->query('showposts=30&post_type=post&category_name=prensa'.'&paged='.$paged); 
		
		  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
		
		
		<div class="BloquesNoticias">
		    <div class="imagen">
		    	<a href="<?php echo the_permalink(); ?>">
		    		<div class="imagen-BG" style="background:linear-gradient(rgba(29, 29, 29, 0), rgba(16, 16, 23, 0.5)), url('<?php the_post_thumbnail_url(); ?>')"></div>
		    	</a>

		    	<div class="info">
		    		<div class="titulo"><?php the_title(); ?></div><!--titulo -->
		    		<div class="descripcion"><?php echo $extracto_corto = propuestasExtractoSliderCorto($post_id); ?></div>
		    	</div>

		    </div><!--imagen -->



		</div><!-- BloquesNoticias -->

  		<?php endwhile; ?>
		
		<div style="clear: both;"></div>


    </div> <!-- contenido -->

    
  

</div> <!-- Textos-seccion -->


</div> <!-- seccion-general --> 