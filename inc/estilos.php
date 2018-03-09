<?php

function estilos_template(){

	// Registrar los estilos
  	wp_register_style('fonts_google', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400|Poppins:300,400,700|Roboto:300,400,700', array(), '1.0.0');
  	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.0.0');
	wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap'), '1.0');
	wp_register_style('estilo', get_template_directory_uri().'/css/estilo.css', array('bootstrap'), '7.0');
	wp_register_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array('bootstrap'), '4.7.0');
	wp_register_style('animate', get_template_directory_uri().'/css/animate.css', array('bootstrap'), '4.7.0');
  	wp_register_style('lightbox', get_template_directory_uri().'/css/lightbox.css', array(), '2.9.0');

	//Llamar a los estilos
	wp_enqueue_style('style');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('estilo');
	wp_enqueue_style('fonts_google' );
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('animate');
  	wp_enqueue_style('lightbox');

	//registrar Js, agregamos al final true para que nuestros Js se cargen en el footer.
	//wp_register_script('analitics', get_template_directory_uri().'/js/analitycs.js', array(), '1.0.0', true );
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery'),'1.12.5', true);
	wp_register_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array('jquery'),'4.0.0', true);
	wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'),'1.0.0', true);
	wp_register_script('lightbox', get_template_directory_uri().'/js/lightbox.js', array('jquery'),'2.9.0', true);
	wp_register_script('waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(),'2.9.0', true);
	wp_register_script('sticky', get_template_directory_uri().'/js/jquery.sticky.js', array('jquery'),'2.9.0', true);


	wp_enqueue_script('jquery');
	//wp_enqueue_script('analitics');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrapjs');
	wp_enqueue_script('scripts');
	wp_enqueue_script('lightbox');
	wp_enqueue_script('waypoints');
	wp_enqueue_script('sticky');

}

add_action('wp_enqueue_scripts','estilos_template');
/*
function mqw_scripts_paginas(){
  if(is_page('inicio')){

    wp_register_style('frontpage', get_template_directory_uri().'/css/frontpage.css', array('bootstrap'), '4.7.0');
    wp_enqueue_style('frontpage');

/*          wp_register_script('instafeed', get_template_directory_uri().'/js/instafeed.min.js', array('jquery'),'2.9.0', true);
          wp_register_script('magnific', get_template_directory_uri().'/js/magnific.min.js', array('jquery'),'2.9.0', true);
          wp_register_script('senderfeed', get_template_directory_uri().'/js/senderfeed.js', array('jquery'),'2.9.0', true);
          wp_enqueue_script('instafeed');
          wp_enqueue_script('magnific');
          wp_enqueue_script('senderfeed'); *//*

      }
}
add_action('template_redirect','mqw_scripts_paginas');

*/
?>
