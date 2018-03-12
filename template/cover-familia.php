<div class="titulo-familia">
	<h3>familia dominicana</h3>
</div>
<article class="c-info" id="familia">

<?php
  global $post;
  $idf = 80;
?>

<?php $todos = new WP_Query(construir_presencia($idf));  ?>

 <?php

//  $total_last = $ultima ->post_count;
//  $total= $todos ->post_count;

?>

  <?php while ($todos-> have_posts()): $todos-> the_post() ?>
    <div id="items" class="ig-p">
      <a class="pilares-ingreso"  href="<?php the_permalink(); ?>">
        <div class="thumb">

        <?php
        if(has_post_thumbnail()){
         the_post_thumbnail('video');
        }
        else{ ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pintura-de-Santo-Domingo-de-Guzman.jpg" alt="">
        <?php  }         ?>
        </div>
        <div class="titulo"><span><?php the_title(); ?></span></div>
        <!-- div class="exe"><?php // excerpt('15'); ?> </div -->
      </a>
  </div>
  <?php endwhile; wp_reset_postdata(); ?>

</article>
