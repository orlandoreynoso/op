      <?php

      $args = array(
      'pagename' => 'donde-estamos-en-centroamerica',
      'post_type' => 'any',
      'post_status' => 'publish',
      //Order & Orderby Parameters
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
        <a class="thumb" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full'); ?>
        </a>
<?php
  endwhile;
    wp_reset_postdata();
    ?>
