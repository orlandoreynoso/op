<?php
/*
  Template Name: Template Noticias
  Template Post Type: post, page, product, agrupaciones
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-12 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <?php  echo "Template recursos - archivee..."; ?>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
              <?php

                $pagina_id = get_the_ID();
                /*

            echo $variable;

            echo "<pre>";
            var_dump($variable);
            echo "</pre>"; */

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

//            return $args;


              ?>
          <div class="cpt-desglose">
            <?php // echo "template pastorales"; ?>
                <div class="c-agrupaciones">
                  <?php $the_query = new WP_Query($args); ?>
                  <?php /*
                  <div class="titulo-pastorales">
                  	<h3><?php $nombre = the_title(); ?></h3>
                  </div>
                  */  ?>

                    <?php // $the_query = new WP_Query(get_agrupaciones(2883,-1));    ?>
                    <?php if ( have_posts() ) : ?>                    
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="list">
                    <div class="todo">
                      <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
                        <div class="thumb" >
                      <?php /*==============*/

                      if(has_post_thumbnail()){
                        the_post_thumbnail('desglose_pagina');
                      }
                      else{ ?>
                        <img class="attachment-medium size-medium wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/santo-tomas-aquino.jpg" alt="">
                      <?php }
                      ?>
                        <div class="info-metaboxes">
                          <span class="pais">
                            <?php echo "" . get_post_meta( get_the_ID(), 'info_adicional_titulo_pais', true ) . ""; ?>
                          </span>
                        </div>                      
                      </div>

                        <?php /*==============*/ ?>
                        <h5><?php the_title(); ?></h5>
                      </a>
                      <!-- div class="exe"><?php // excerpt('15'); ?> </div -->
                    </div>
                    </div>
                    <?php endwhile;?>

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
          </div>
            <?php //  echo  'estoy en page';      ?>
            <?php 
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;  
            ?>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
