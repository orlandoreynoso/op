<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>
<body>
	<?php global $post; ?>
	<?php if ($post->post_name == 'inicio') { ?>
		<div class="menufrontpage">
		    <nav class="navbar navbar-expand-lg navbar-light">
		      <?php //get_template_part( 'template/header','buscador'); ?>
		      <?php // get_template_part( 'template/header','menuresponsivo'); ?>
		      <?php get_template_part( 'template/header','menumovil'); ?>
		    </nav>

		    <div class="deskfrontpage" id="deskfrontpage">
		    <div class="container menu-coverpage">
		      <div class="row">
		        <div class="contenedor-logo-menu">
		          <div class="or-logo-cover">
		            <?php logo_provincia(); ?>
									<div class="op-slogan">
										<h2>Provincia San Vicente Ferrer</h2>
										<h3>Dominicos en Centro America</h3>
									</div>
		          </div>
		          <div class="or-menum front-page">
		            <nav class="navbar-me">
		              <?php showMenuboostrap(); ?>
		            </nav>
		          </div>
		        </div><!-- fin contenedor-lm-msc -->
		      </div><!-- Finaliza el ROW -->
		    </div><!-- Finaliza el container del div menudesck -->
		  </div><!--  Finaliza el div de menu-desk-->
		</div><!-- Finaliza el div >> menufrontpage -->
	<?php } else{ ?>
		<div class="e-menu">
		    <nav class="navbar navbar-expand-lg navbar-light">
		      <?php // get_template_part( 'template/header','buscador'); ?>
		      <?php // get_template_part( 'template/header','menuresponsivo'); ?>
		      <?php get_template_part( 'template/header','menumovil'); ?>
		    </nav>

		    <div class="menu-desk" id="menu-desk">
		    <div class="container menu-coverpage">
		      <div class="row">
		        <div class="contenedor-lm-msc">
		          <div class="or-logo-cover">
		            <?php logo_provincia(); ?>
									<div class="op-slogan">
										<h2>Provincia San Vicente Ferrer</h2>
										<h3>Dominicos en Centro America</h3>
									</div>
		          </div>
		          <div class="or-menum menuinteriores">
		            <nav class="navbar-me">
		              <?php showMenuboostrap(); ?>
		            </nav>
		          </div>
		        </div><!-- fin contenedor-lm-msc -->
		      </div><!-- Finaliza el ROW -->
		    </div><!-- Finaliza el container del div menudesck -->
		  </div><!--  Finaliza el div de menu-desk-->
		</div><!-- Finaliza el div >> e-menu -->
	<?php } ?>
