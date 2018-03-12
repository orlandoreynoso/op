<?php
/*
Template Name: coverPage mscgt
 */
?>
<?php get_header(); ?>

<!-- div class="sitebienvenida" id="coverbienvenida">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="slogan">
          <h1>Misioneros del sagrado Corazón</h1>
          <h2>Mixco, Ciudad de Guatemala</h2>
        </div>
        <?php // get_template_part('template/cover', 'bienvenidos' ); ?>
      </div>
    </div>
  </div>
</div --><!-- Finaliza el div-welcome -->

<div class="slide">
  <?php get_template_part( 'template/cover', 'slide') ?>
</div>

<?php // get_template_part( 'template/cover', 'inicio') ?>

<?php // get_template_part( 'template/cover', 'slide') ?>
<section class="frameopveritas">
  <?php //get_template_part( 'template/cover', 'infoparroquial') ?>
  <?php get_template_part( 'template/cover','opveritas') ?>
</section>
<section class="frameprovincial">
  <?php get_template_part( 'template/cover','provincial') ?>
</section>
<section class="frameultimasnoticias">
  <?php get_template_part( 'template/cover','ultimasnoticias') ?>
</section>
<section class="m-iparroquial m-gris">
  <?php //get_template_part( 'template/cover', 'infoparroquial') ?>
  <?php get_template_part( 'template/cover','nuestrospilares') ?>
</section>
<section class="frame-rosario">
  <?php //get_template_part( 'template/cover', 'infoparroquial') ?>
  <?php // get_template_part( 'template/cover','nuestrospilares') ?>
</section>
<section class="framevidamision">
  <?php get_template_part( 'template/cover','vidamision') ?>
</section>
<section class="framepresencia">
  <?php get_template_part( 'template/cover','presencia') ?>
</section>
<section class="framefamilia m-blanco">
  <?php //get_template_part( 'template/cover', 'infoparroquial') ?>
  <?php get_template_part( 'template/cover','familia') ?>
</section>
<section class="framefraile">
  <?php //get_template_part( 'template/cover', 'infoparroquial') ?>
  <?php get_template_part( 'template/cover','fraile') ?>
</section>

<section class="framedonacion">
  <?php get_template_part( 'template/cover', 'donacion'); ?>
</section>

<!-- section class="m-contenido-secciones">
  <?php // get_template_part( 'template/cover', 'contenido') ?>
</section -->

<!-- section class="m-entradas-recientes">
  <?php // get_template_part( 'template/cover','recomendaciones' ); ?>
</section -->

<!-- section class="m-entradas-recientes m-gris">
  <?php // get_template_part( 'template/cover','entradasrecientes' ); ?>
</section -->

<!-- section class="msc-agrupaciones">
  <?php // get_template_part( 'template/cover', 'agrupaciones') ?>
</section -->


<?php get_footer(); ?>
