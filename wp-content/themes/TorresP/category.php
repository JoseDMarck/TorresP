<?php get_header(); ?>



<div class="main">



<!-- HEADER -->
<?php echo get_template_part("contenidos/home/1-header"); ?>

    

	
	<div class="ContenidorSeccion">
    <div class="BlurTop2"></div>
<div class="contenedorEspecialesGeneral">

    <div class="TituloSeccionMeta">
        <?php _e( 'Categorías para ', 'html5blank' ); single_cat_title(); ?>
    </div><!-- TituloSección-->


    	
    	<?php get_template_part('loop'); ?>


    	<div style="clear: both;"></div>
		<?php get_template_part('pagination'); ?>



     </div><!-- contenedorEspecialesGeneral -->



<div style="clear: both;"></div>
</div><!-- ContenedorSección -->


 



 <!-- Footer -->
<?php echo get_template_part("contenidos/home/5-footer"); ?>
</div> <!-- Main -->




 


<?php get_footer(); ?>
 


 