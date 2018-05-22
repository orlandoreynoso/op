<?php

/* devuelve el directorio de stilo de css, y se le asigna a temppath */

define('TEMPPATH',get_bloginfo('stylesheet_directory'));

/*En esto concatenamos la carpeta images*/

define('IMAGES',TEMPPATH. "/images");

//define('HOME',bloginfo('url' ));

// Esto es para aderir una imágen destacada.

add_theme_support('post-thumbnails');

//add_image_size( $name, $width, $height, $crop );

function menus_generales(){
  register_nav_menus(array(
    'menu-redes'=>__('Menu Redes','godoy')
  ));
}

add_action('init','menus_generales');


function get_post_ancestor_id(){
    global $post;
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}


/*========== incluyendo los estilo que uso ===============*/


include (TEMPLATEPATH. '/inc/estilos.php');


//add_image_size( $name, $width, $height, $crop );

the_post_thumbnail('thumbnail',1024,1024,true);       // Tamaño de la miniatura 150x150 píxeles
the_post_thumbnail('medium',300,300, true);          // Tamaño de la mediano 300x300 píxeles
the_post_thumbnail('espiritualidad',420,312);
the_post_thumbnail('pastorales', 751, 422, true);
the_post_thumbnail('comunidades', 1100, 404, true);
the_post_thumbnail('full'); // La resolución original
add_image_size('espiritualidad', 420, 312, true);
add_image_size('fraile', 682, 433, true);
add_image_size('presencia', 606, 476, true);
add_image_size('plan', 260, 329, true);
add_image_size('noticias', 418, 314, true);
add_image_size('pilares', 300, 214, true);
add_image_size('desglose', 236, 125, true);
add_image_size('desglose_pagina', 278, 209, true);
//add_image_size('pilares', 362, 333, true);
//add_image_size('pilares', 352, 323, true);
//add_image_size('pilares', 181, 111, true);
//set_post_thumbnail_size(1024,1024,true );

require_once(TEMPLATEPATH.'/libs/wp_bootstrap_navwalker.php');


/* Theme setup */

add_action( 'after_setup_theme', 'wpt_setup' );

    if ( ! function_exists( 'wpt_setup' ) ):

        function wpt_setup() {

            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );

        } endif;




/*

function wpt_register_js() {

    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');

    wp_enqueue_script('jquery.bootstrap.min');

}

add_action( 'init', 'wpt_register_js' );



function wpt_register_css() {

    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );

    wp_enqueue_style( 'bootstrap.min' );

}



add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

*/



function showMenuboostrap(){

    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu nav navbar-nav', /* tambien lo que contiene el  Ul primero*/
        'container'=> false,  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
        'container_id' =>'azucar',
        'container_class' =>'oro',
        'before' =>'', //Esto envuelve el a
        'after' =>'', // Esto va despues de cada a
    );

    wp_nav_menu($args);

}


function showMenu(){

    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu nav navbar-nav', /* tambien lo que contiene el  Ul primero*/
        'container'=> false,  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
        'container_id' =>'azucar',
        'container_class' =>'oro',
        'before' =>'', //Esto envuelve el a
        'after' =>'', // Esto va despues de cada a
    );
    wp_nav_menu($args);
}



// Register custom navigation walker



/*

wp_nav_menu( array(

  'menu' => 'top_menu',

  'depth' => 2,

  'container' => false,

  'menu_class' => 'nav',

    'walker' => new wp_bootstrap_navwalker())

);

*/


function logo(){
$logo = IMAGES.'/santuario.png'; ?>
<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Provincia San Vicente Ferrer - Dominicos en Centro América"></a>
<?php
}

function logo_provincia(){
$logo = IMAGES.'/logo_provincia.png'; ?>
<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Provincia San Vicente Ferrer - Dominicos en Centro América"></a>
<?php
}

function logoMovil(){
$logo = IMAGES.'/logo_provincia.png'; ?>
<a class="logo navbar-brand text-left" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo; ?>" alt="Provincia San Vicente Ferrer - Dominicos en Centro América"></a>
<?php
}

/*
function logo(){

    $logo = IMAGES.'/santarita.png';

    echo '<a class="logo" href="';

    echo bloginfo('url');

    echo '"><img src="'.$logo.'" alt="Provincia San Vicente Ferrer - Dominicos en Centro América"></a>';

}
 */
function slogan(){

    echo '<a href="';

    echo bloginfo('url');

    echo '" id="slogan"><h1>Santuario</h1><h2>nuestra señora del sagrado corazón</h2></a>';

}


include (TEMPLATEPATH . '/inc/contenidos.php');
include (TEMPLATEPATH . '/libs/entradas.php');

include (TEMPLATEPATH . '/libs/totop.php');

include (TEMPLATEPATH . '/libs/breadcrumb.php');

include (TEMPLATEPATH . '/files/bread.php');
//include (TEMPLATEPATH . '/files/paginacioncustom.php');
include (TEMPLATEPATH. '/inc/paginacioncpt.php');

/*==== n Widget=====*/

function ordenp_widgets(){
     register_sidebar( array(
     'name' => 'Blog Sidebar',
     'id' => 'blog_sidebar',
     'before_widget' => '<div class="widget">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
     ));

     register_sidebar( array(
     'name' => 'Texto provincial',
     'id' => 'provincial_texto',
     'before_widget' => '<div class="provincial_info">',
     'after_widget' => '</div>',
     'before_title' => '<div class="titulo-delete"><h3>',
     'after_title' => '</h3></div>'
     ));

     register_sidebar( array(
     'name' => 'Texto Nuestros pilares',
     'id' => 'texto-pilares',
     'before_widget' => '<div class="pilares_info">',
     'after_widget' => '</div>',
     'before_title' => '<div class="titulo-delete"><h3>',
     'after_title' => '</h3></div>'
     ));

    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar'
    ));

    register_sidebar(
        array(
            'name' => 'Suscripcion',
            'id' => 'suscripcion'
    ));

}

add_action('widgets_init', 'ordenp_widgets');

/*==============================================*/

include (TEMPLATEPATH . '/libs/paginacion.php');

paginacion();


/* === borrar si no funciona=====**/
 // Fake pages' permalinks and titles. Change these to your required sub pages.
    $my_fake_pages = array(
        'reviews' => 'Reviews',
        'purchase' => 'Purchase',
        'author' => 'Author Bio'
    );

    add_filter('rewrite_rules_array', 'fsp_insertrules');
    add_filter('query_vars', 'fsp_insertqv');

    // Adding fake pages' rewrite rules
    function fsp_insertrules($rules)
    {
        global $my_fake_pages;

        $newrules = array();
        foreach ($my_fake_pages as $slug => $title)
            $newrules['books/([^/]+)/' . $slug . '/?$'] = 'index.php?books=$matches[1]&fpage=' . $slug;

        return $newrules + $rules;
    }

    // Tell WordPress to accept our custom query variable
    function fsp_insertqv($vars)
    {
        array_push($vars, 'fpage');
        return $vars;
    }

    // Remove WordPress's default canonical handling function

    remove_filter('wp_head', 'rel_canonical');
    add_filter('wp_head', 'fsp_rel_canonical');
    function fsp_rel_canonical()
    {
        global $current_fp, $wp_the_query;

        if (!is_singular())
            return;

        if (!$id = $wp_the_query->get_queried_object_id())
            return;

        $link = trailingslashit(get_permalink($id));

        // Make sure fake pages' permalinks are canonical
        if (!empty($current_fp))
            $link .= user_trailingslashit($current_fp);

        echo '<link rel="canonical" href="'.$link.'" />';
    }


    /*== borrar por yoast ===*/

    function wpseo_canonical_exclude( $canonical ) {
        global $post;
        if (is_singular('books')) {
            $canonical = false;
    }
    return $canonical;
}

add_filter( 'wpseo_canonical', 'wpseo_canonical_exclude' );


?>
