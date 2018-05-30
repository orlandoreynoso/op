      <?php

      $args = array(
      'post_type' => 'recursos',
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'post_parent' => 0, 
      'order'               => 'DESC',
      'orderby'             => 'date',
      //Pagination Parameters
      'posts_per_page'         => 1,
      );


       ?>

  <?php $the_query = new WP_Query($args);  ?>
    <?php
    $id = get_permalink($page);
    $title = get_the_title($page );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
        <a class="ingresar"  href="<?php the_permalink(); ?>">
          <?php echo "Ingresa a más "; ?><?php the_title(); ?>
        </a>
        <a class="thumb" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full'); ?>            
        </a>
<?php
  endwhile;
    wp_reset_postdata();
    ?>
