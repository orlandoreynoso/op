<div class="header-title">
  <div class="titulo">
    <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
  </div>
  <div class="titulos-page">
    <?php the_title(); ?>
  </div>
</div>
<p>-------------------------------------------------------</p>
<div class="header-title-cpt">
  <div class="titulo">
    <div class="mapeo">
      <?php dimox_breadcrumbs(); ?>
      <div class="father_title">
          <a href="<?php echo get_the_permalink(get_post_ancestor_id()); ?>">
          <?php echo get_the_title( get_post_ancestor_id()); ?>
         </a>
     </div>
    </div>
  </div>
  <div class="titulos-page">
    <?php the_title(); ?>
  </div>
</div>
<p>-------------------------------------------------------</p>
<?php  echo "estoy en ".get_the_ID() . "cpt-padre.php"; ?>
<?php $pagina_id = get_the_ID(); ?>
<div class="agrupaciones-desglose"><!-- Inicio id agrupaciones-desglose -->
  <div class="c-agrupaciones">
    <?php $the_query = new WP_Query(contenidosPorId('any',$pagina_id,-1)); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <?php get_template_part('template/contenido','ancestro' ); ?>
    <?php endwhile;?>
  </div>
</div><!-- fin id agrupaciones-desglose -->