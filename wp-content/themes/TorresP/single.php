 <?php echo get_template_part("header-single"); ?>


	<div class="main">
	 
	 <!-- HEADER -->
	<?php echo get_template_part("contenidos/home/1-header-single"); ?>


	<div class="mainSingleContenedor">
	

	 <div class="SingleContenedor">
 
			<div class="cuerpo-post">
 				
 				<?php  while (have_posts()) : the_post(); ?>
				
	
 				<div class="imagen_post">
						<?php the_post_thumbnail('cienciario-size');?>
				</div>

				<div class="titulo">
 					<?php the_title(); ?>
 				</div>
	

				<!-- post details -->
				<div class="date">Publicado el <?php the_time('j F  Y'); ?></div> 
				<br>
				 

				 


				<?php the_content(); // Dynamic Content ?>
	
				<div class="categorias"> 
				 
						<?php the_tags( __( '', 'html5blank' ), ' ', '<br>'); ?> 
					 

				</div>
	
				<!--<div class="categorias"> <?php _e( 'Categorías: ', 'html5blank' ); the_category(', '); // Separated by commas ?></div>-->
				<?php endwhile; ?>
	
			</div><!-- Cuerpo post  --> 
	
			 <?php echo get_template_part("contenidos/redes-sociales/redes-sociales"); ?>



		</div><!-- single contenedor -->






 
	 

	 <div style="clear: both;"></div>

	 </div><!-- mainSingleContenedor -->


	 
	</div><!-- main -->
 

<?php get_footer(); ?>
