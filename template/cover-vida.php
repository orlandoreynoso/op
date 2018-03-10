<?php

  $args = array(
  'post_type' => 'plandevida',
  'posts_per_page' => -1,
  'orderby'   => 'menu_order',
  'order'     => 'ASC'
  );


  $todos = new WP_Query($args);

  $total_last = $ultima ->post_count;
  $total= $todos ->post_count;

  ?>
  <?php
  /* nombre del label */
  $obj = get_post_type_object( 'plandevida' );
  $nombrept = $obj->labels->singular_name;

  /*  muesetra el slug */
  $post_type_obj = get_post_type_object('plandevida');
  $slug = $post_type_obj->rewrite['slug'];

?>
<div class="vida col-sm-12 col-md-6">
    <div class="row">
      <div class="thumb col-md-6">
        <a href="<?php echo esc_url( home_url( '/' ) ).$slug; ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vida.jpg" alt="<?php echo $nombrept; ?>">
        </a>
      </div>
      <div class="contenido col-md-6">

        <div class="titulo-cp">
            <a href="<?php echo esc_url( home_url( '/' ) ).$slug; ?>"><?php echo $nombrept; ?></a>
        </div>

        <ul>
          <?php while ($todos-> have_posts()): $todos-> the_post() ?>
            <li>
              <a class="pilares-ingreso"  href="<?php the_permalink(); ?>">
                <div class="titulo">
                  <i class="fa fa-angle-double-right"></i>
                  <span><?php the_title(); ?></span>
                </div>
              </a>
            </li>
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>
      </div><!-- finaliza div contenido col-md-6 -->
    </div>
</div>
