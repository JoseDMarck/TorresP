<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="BloquesNoticias">
		    <div class="imagen">
		    <a href="<?php echo the_permalink(); ?>">
          		<div class="overlayEspeciales"></div>
        	</a>

		    		<?php the_post_thumbnail(); ?>	

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

<?php else: ?>

	<!-- article -->

	<div class="TituloLoops"><?php _e( 'Lo sentimos, no hay contenido con este criterio.', 'html5blank' ); ?></div>

	<!-- /article -->

<?php endif; ?>
