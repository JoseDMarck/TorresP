<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slick/slick-theme.css">
 



<div class="contenedorNoticiasNew">
  <section class="noticiasSlide slider">



  <?php 
  $my_query = new WP_Query();
  $my_query = new WP_Query( array('post_type' => 'post', 'category_name' =>'home', 'posts_per_page' => 9, 'order' => 'DESC', 'paged'=> $paged )); 
  while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
  ?>



    <div class="BloquesNoticiasNew">

      <div class="imagen">
         <a href="<?php echo the_permalink(); ?>">
            <?php the_post_thumbnail('cienciario-size'); ?>
         </a>
      </div><!-- imagen -->

      <div class="titulo">
          <a href="<?php echo the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
       </div>

      
    </div><!-- BloqueNoticiasNew -->
   


      <?php endwhile; ?>  
    
     
  </section>

</div>

