<?php get_header(); ?>


	<div class="main">
	 
	 <!-- HEADER -->
	<?php echo get_template_part("contenidos/home/1-header"); ?>


	<div class="mainSingleContenedor">
	

	 <div class="SingleContenedor">
 
			<div class="cuerpo-post">
 				
 				<?php  while (have_posts()) : the_post(); ?>
				<div class="titulo">
 					<?php the_title(); ?>
 				</div>
	
	
 				<div class="imagen_post">
						<?php the_post_thumbnail('cienciario-size');?>
					</div>
				<!-- post details -->
				<div class="date"><?php the_time('j/F, Y g:ia'); ?></div>
				<div class="author"><?php _e( 'Publicado por:', 'html5blank' ); ?> <?php the_author_posts_link(); ?></div>
			
				
				<div class="videos_meta_contenedor">


				 <?php $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));

				 	if( $video_youtube != ""){ ?>

				 	<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/<?php echo $video_youtube; ?>?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>


				 	<?php } ?>
		

				 </div>


				<?php the_content(); // Dynamic Content ?>
	
				<div class="categorias"> 
				 
						<?php the_tags( __( '', 'html5blank' ), ' ', '<br>'); ?> 
					 

				</div>
	
				<!--<div class="categorias"> <?php _e( 'Categorías: ', 'html5blank' ); the_category(', '); // Separated by commas ?></div>-->
				<?php endwhile; ?>
	
			</div><!-- Cuerpo post  --> 
	
		</div><!-- single contenedor -->



 
	 

	 <div style="clear: both;"></div>

	 </div><!-- mainSingleContenedor -->


	 
	</div><!-- main -->
 

<?php get_footer(); ?>
