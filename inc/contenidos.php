<?php
function construir_presencia($id){
  $args = array(
  //'pagename' => 'donde-estamos-en-centroamerica',
  'post_type' => 'any',
  'post_status' => 'publish',
  'post_parent' => $id,
  //Order & Orderby Parameters
  'order'               => 'DESC',
  'orderby'             => 'date',
  //Pagination Parameters
  'posts_per_page'         => -1,
  );

    return $args;
}

function presencia($id){ ?>
  <?php $the_query = new WP_Query(construir_presencia($id));  ?>
    <?php
    $id = get_permalink($page);
    $title = get_the_title($page );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
    <div class="lista">
      <div class="titulo">
        <h3><?php the_title();  ?></h3>
      </div>
      <div class="listado">
        <?php lista_presencia(get_the_id()); ?>
      </div>
    </div>
<?php
  endwhile;
    wp_reset_postdata();
    ?>
  <?php
}

function lista_presencia($id){ ?>
  <?php $the_query = new WP_Query(construir_presencia($id));  ?>

    <?php
    $id = get_permalink($page);
    $title = get_the_title($page );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
     <a class_="item" href="<?php the_permalink(); ?>" class="cat">
       <i class="fa fa-angle-double-right"></i>
       <?php the_title();  ?>
     </a>

<?php
  endwhile;
    wp_reset_postdata();
    ?>

  <?php
}



function contenidosPorNombre($ptipo, $nombre, $npaginas){

  $args = array(
      'post_type' => $ptipo,
      'pagename' => $nombre,
      'posts_per_page' => $npaginas
  );

return $args;

}

function contenidosPorId($ptipo, $pagina, $npaginas){

  $args = array(
      'post_type' => $ptipo,
      'post_parent' => $pagina,
      'posts_per_page' => $npaginas
  );

return $args;

}

/*=========  entradas recientes en el frontpage==================*/
function op_entradas_frontpage(){
/*==================================*/
    /**
     * The WordPress Query class.
     * @link http://codex.wordpress.org/Function_Reference/WP_Query
     *
     */
    $args_10 = array(
        'post_type' => 'any',
        'post_status' => 'publish',
        //Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',
        //Pagination Parameters
        'posts_per_page'         => 4,
    );
// The Query
$the_query = new WP_Query( $args_10);
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
<div class="lista">
  <a href="<?php the_permalink(); ?>">
    <div class="thumb">
    <?php
    if(has_post_thumbnail()){
      the_post_thumbnail('medium');
    }
    else{ ?>
      <img class="attachment-medium size-medium wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/frailes-dominicos-op.jpg" alt="">
    <?php }       ?>
      <div class="fecha">
        <span class="label1"><?php the_time('j  '); ?></span>
        <span class="label2"><?php the_time('F '); ?></span>
      </div>
    </div>
    <div class="titulo"><span><?php the_title(); ?></span></div>
    <div class="exe"><?php excerpt('20'); ?> </div>
  </a>
</div>
        <?php }} else {
        echo 'No hay artículos';
    // no se encontraron artículos
}
/* Restore original Post Data */
 wp_reset_postdata();
}

/*====== Funcion entradas recientes ===============*/
function mscEntradasRecientes(){
/*==================================*/
    /**
     * The WordPress Query class.
     * @link http://codex.wordpress.org/Function_Reference/WP_Query
     *
     */
    $args_10 = array(
        'post_type' => 'any',
        'post_status' => 'publish',
        //Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',
        //Pagination Parameters
        'posts_per_page'         => 4,
    );
// The Query
$the_query = new WP_Query( $args_10);
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
<div class="lista">
  <a href="<?php the_permalink(); ?>">
    <?php
    if(has_post_thumbnail()){
      the_post_thumbnail('medium');
    }
    else{ ?>
      <img class="attachment-medium size-medium wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
    <?php }       ?>
    <div class="texto"><span><?php the_title(); ?></span></div>
  </a>
</div>
        <?php }} else {
        echo 'No hay artículos';
    // no se encontraron artículos
}
/* Restore original Post Data */
 wp_reset_postdata();
}

/*===========
recomendaciones sin EXE
Mostrando contenidos hijos y con titulo de la página Padre
*/

function ContenidoHijoPost($page,$perpage){
    ?>
    <?php
    $the_query = new WP_Query(create_array($page,$perpage));
        $id = get_permalink($page);
        $title = get_the_title($page); /**/
         while($the_query->have_posts()) : $the_query->the_post();  ?>
        <div class="lista">
            <a class="thumb" href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('full'); ?>
              <div class="texto"><span><?php echo $title; ?></span></div>
            </a>
            <!-- div class="exe"><?php // excerpt('20'); ?> </div -->
        </div>
    <?php
      endwhile;
}

function contenidoPaginaPorNombre($pagename){
    ?>
    <?php
        $the_query = new WP_Query(create_pagename($pagename));
  //      $id = get_permalink($the_query);
//        $title = get_the_title($the_query );
         while($the_query->have_posts()) : $the_query->the_post();  ?>
         <div class="lista">
             <a class="thumb" href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail('full'); ?>
               <div class="texto"><span><?php the_title(); ?></span></div>
             </a>
             <!-- div class="exe"><?php // excerpt('20'); ?> </div -->
         </div>
    <?php
      endwhile;
}

?>
