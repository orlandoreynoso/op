<?php
/*
  Template Name: Recursos pastorales
  Template Post Type: post, page, product, reflexiones
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con page-con">
          <div class="interiores con-recursos-pastorales">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
            <?php  echo  'estoy en rECURSOS PASTOARESL';      ?>
            <div class="cpt-recursos">

            <?php   $pagina_id = get_the_ID();   ?>

            <?php

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $args = array(
              'post_type' => 'wpdmpro',
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              'post_parent' => 0,
//              'posts_per_page' => 4,
              'paged' => $paged,
            );

            ?>

                  <?php $recursos = new WP_Query($args); ?>

                    <?php if ( have_posts() ) : ?>
                    <?php while($recursos->have_posts() ): $recursos->the_post(); ?>
                    <div class="list">
                    <div class="todo">
                      <a class="enlace" href="<?php the_permalink(); ?>">
                        <div class="thumb" >
                      <?php /*==============*/

                      if(has_post_thumbnail()){
                        the_post_thumbnail('medium');
                      }
                      else{ ?>
                        <img class="attachment-medium size-medium wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/santo-tomas-aquino.jpg" alt="">
                      <?php }
                      ?>
                      </div>
                      <div class="textos">
                        <div class="titulo">
                          <h3><?php
                          // the_title();
                            $titulo = get_the_title();
                            $nuevo_titulo = wp_trim_words( $titulo, 12, '...' );
                            echo ''.$nuevo_titulo.'';
                           ?></h3>
                        </div>                        
                        
                      </div>
                      </a>
                    </div>
                    </div>
                  <?php endwhile; ?>
                  <div class="navigationpresentaciones">
                    <?php // if (function_exists(custom_pagination_msc)) { ?>
                      <div class="col-sm-12 inner-sm">
                        <?php custom_pagination_msc($my_query->max_num_pages, "", $paged); ?>
                      </div>
                    <?php // } ?>
                  </div>                  
                 <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p><?php _e('Ups!, no hay entradas.'); ?></p>
                    <?php endif; ?>
              
            </div>
            <div class="page-contenido"> 
            <!-- p>Estoy en la plantilla Página......</p -->     
              <?php
                while ( have_posts() ) : the_post();
                  the_content();
                endwhile;
              ?>
            </div>
          </div>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>
            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
