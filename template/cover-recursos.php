<?php

$id_recursos = 113;

?>
<?php $the_query = new WP_Query(construir_presencia($id_recursos));  ?>
<?php while ($the_query-> have_posts()): $the_query-> the_post() ?>
  <div class="recurso">
    <a class="pilares-ingreso"  href="<?php the_permalink(); ?>">
      <div class="thumb">      
        <?php
        if(has_post_thumbnail()){
         the_post_thumbnail('medium');
        }
        else{ ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/santo-tomas-aquino.jpg" alt="">
        <?php  }     ?>        
      </div>
      <div class="titulo">
        <!-- i class="fa fa-angle-double-right"></i -->
        <?php the_title(); ?>
      </div>
    </a>
  </div>
<?php endwhile; wp_reset_postdata(); ?>
