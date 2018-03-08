<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body>

<div class="e-menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <?php get_template_part( 'template/header','buscador'); ?>
      <?php // get_template_part( 'template/header','menuresponsivo'); ?>
      <?php get_template_part( 'template/header','menumovil'); ?>
    </nav>
    
    <div class="menu-desk" id="menu-desk">
    <div class="container menu-coverpage">
      <div class="row">
        <div class="contenedor-lm-msc">
          <div class="or-logo-cover">
            <?php logoMsc(); ?>
          </div>
          <div class="or-menum">
            <nav class="navbar-me">
              <?php showMenuboostrap(); ?>
            </nav>
          </div>
        </div><!-- fin contenedor-lm-msc -->
      </div><!-- Finaliza el ROW -->
    </div><!-- Finaliza el container del div menudesck -->
  </div><!--  Finaliza el div de menu-desk-->



</div><!-- Finaliza el div >> e-menu -->
