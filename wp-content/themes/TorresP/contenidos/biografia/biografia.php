<div class="seccion-general">


  <div class="Textos-seccion">

    <div class="titulo">
      <h1><?php echo the_title(); ?> </h1>
    </div>
    
<?php  while (have_posts()) : the_post(); ?>
    <div class="contenido">
      <?php the_content(); // Dynamic Content ?>
    </div>

      <?php endwhile; ?>
  

</div> <!-- Textos-seccion -->


</div> <!-- seccion-general --> 