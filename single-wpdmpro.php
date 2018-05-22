<?php get_header();  ?>

<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="header-title">
              <div class="titulo">
                <div class="mapeo">
                  <?php dimox_breadcrumbs(); ?>
                  <div class="father_title">
                      <a href="<?php echo get_the_permalink(get_post_ancestor_id()); ?>">
                      <?php  echo get_the_title( get_post_ancestor_id()); ?>
                     </a>
                 </div>
                </div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>

            <?php  echo "aqui va el loop wpdmpro"; ?>
            <?php //get_template_part( 'template/cpt','padre'); ?>
            <?php $pagina_id = get_the_ID(); ?>
            <div class="agrupaciones-desglose"><!-- Inicio id agrupaciones-desglose -->
              <div class="c-agrupaciones">
                <?php $the_query = new WP_Query(contenidosPorId('any',$pagina_id,-1)); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <?php get_template_part('template/contenido','ancestro' ); ?>
                <?php endwhile;?>
              </div>
            </div><!-- fin id agrupaciones-desglose -->

            <?php

global $post;

//echo $post->ID;
//echo $post->post_name;
?>

  <?php // print_r($post); ?>

<?php

//has_children()
//     'child_of' => $post->ID,
      //'parent' => $post->ID
//is_top_level()
//        'child_of' => $post->post_parent,
        //'parent' => $post->post_parent
// Your functions.php content
/*
             $pages = get_pages('child_of=' . $post->ID);
             foreach ($pages as $key => $value) {
               echo $value;
             }
             */


//            wp_list_categories('child_of=.'.$post->ID.'');

            /*
            $parents = array();
              $args = array(
                'post_parent' => 0,
                'post_type'   => 'reflexiones',
                'numberposts' => -1,
                'post_status' => 'any'
              );
*/
/*
$parents = array();
$args = array(
                'post_type' => 'reflexiones',
                'post_parent' => 0,
                'post_status' => 'any'
             );

$pages = get_pages($args);
foreach( $pages as $page){
    $childs = get_pages('child_of='.$page->ID);
    if( count( $childs ) > 0 ){
        echo '<li><a rel="nofollow" href="#">' . $page->post_title .

'</a>';

        if( count( $childs ) > 0 ){
            echo '<ul>';
            foreach( $childs as $child ){
                echo '<li><a rel="nofollow" href="' . get_permalink($child->ID) .

'">' . $child->post_title .

'</a></li>';
            }
            echo '</ul>';
        }
    }
}
*/

         //     $children = get_children( $args );
              //echo $children[2]->post_name;


            ///    global $post;
        /* Get an array of Ancestors and Parents if they exist */
            //$parents = get_post_ancestors( $post->ID );
       // $estamos = get_post($children);
        //echo $estamos->post_title;
            ?>
              <?php // print_r($children); ?>

            <?php  get_template_part( 'template/loop','cpt'); ?>
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

<?php  /*============ fin fin ===================*/ ?>

<?php  get_footer(); ?>
