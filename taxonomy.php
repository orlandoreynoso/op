<?php
/*
  Template Name: archivo para reflexiones
  Template Post Type: post, page, product, reflexiones
*/
 get_header();
?>

<?php /*===================================== */ ?>
<section class="con-general">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
              </div>
              <div class="titulos-page">
                <?php post_type_archive_title(); ?>
              </div>
            </div>

            <?php   $pagina_id = get_the_ID(); ?>
            <?php  echo "estoy taxonomy.php" ?>

          <?php 
            $termino_actual = get_queried_object();
            $taxonomia = get_taxonomy($termino_actual->taxonomy);
            echo "<h3>".$taxonomia->label. ": ".$termino_actual->name."</h3>";

?>
      <hr>
<a href="<?php $termino_actual->taxonomy; ?>">taxonomia</a>
      <hr>
      <a href="<?php $termino_actual->parente; ?>">parente</a>
<pre>
<?php            var_dump(get_queried_object());            ?>
</pre>
           <hr>


            <?php

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $args = array(
              'post_type' => 'reflexiones',
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              'post_parent' => 0,
//              'posts_per_page' => 4,
              'paged' => $paged,
            );

            ?>

          <?php $reflexiones = new WP_Query($args); ?>

          <div class="presentaciones-desglose">
            <?php // echo "template pastorales"; ?>
                <div class="c-presentaciones">
<?php



                  ?>
                    <?php if ( have_posts() ) : ?>
                    <?php while($reflexiones->have_posts() ): $reflexiones->the_post(); ?>
                    <div class="list">
                    <div class="todo">
                      <a class="enlace" href="<?php the_permalink(); ?>">
                        <div class="thumb" >
                      <?php /*==============*/

                      if(has_post_thumbnail()){
                        the_post_thumbnail('medium');
                      }
                      else{ ?>
                        <img class="attachment-medium size-medium wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
                      <?php }
                      ?>
                      </div>
                      <div class="textos">
                        <div class="titulo">
                          <h3><?php
                          // the_title();
                            $titulo = get_the_title();
                            $nuevo_titulo = wp_trim_words( $titulo, 12, '...' );
                            echo '"'.$nuevo_titulo.'"';
                           ?></h3>
                        </div>
                        <div class="cuadro-fecha">
                          <span class="titulo-fecha">
                            Presentación &raquo;
                          </span>
                          <span class="fecha">
                            <?php echo "" . get_post_meta( get_the_ID(), 'info_page_fecha', true ) . ""; ?>
                          </span>
                        </div>
                      </div>
                      </a>
                    </div>
                    </div>
                  <?php endwhile; ?>
                  <div class="navigationpresentaciones">
                      <div class="col-sm-12 inner-sm">
                        <?php custom_pagination_msc($reflexiones->max_num_pages, "", $paged); ?>
                      </div>
                  </div>
                  <?php
                  /*
                  $big = 999999999; // need an unlikely integer

                   echo paginate_links( array(

                      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                      'format' => '?paged=%#%',
                      'current' => max( 1, get_query_var('paged') ),
                      'total' => $presentaciones->max_num_pages

                  ) );
*/
/*
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

pagination_bar( $presentaciones ); */
/*
$total_pages = $loop->max_num_pages;

   if ($total_pages > 1){

       $current_page = max(1, get_query_var('paged'));

       echo paginate_links(array(
           'base' => get_pagenum_link(1) . '%_%',
           'format' => '/page/%#%',
           'current' => $current_page,
           'total' => $total_pages,
           'prev_text'    => __('« prev'),
           'next_text'    => __('next »'),
       ));
   }
*/
                   ?>
                  <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p><?php _e('Ups!, no hay entradas.'); ?></p>
                    <?php endif; ?>

                </div>
          </div>
          </div>
       </div><!-- FINALIZA DIV DE CONTENIDOS  -->

       <div class="col-xs-12 col-md-4 side">
         <div class="entradas">
           <div class="titulo_entradas">
             <h3>Entradas recientes</h3>
           </div>
           <div class="recientes">
             <?php get_sidebar('full'); ?>
           </div>
         </div>
       </div>
    </div>
  </div>
</section>

<?php /*=========================================*/ ?>




<?php get_footer();  ?>
