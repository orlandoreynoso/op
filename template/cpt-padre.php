<div class="header-title">
  <div class="titulo">
    <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
  </div>
  <div class="titulos-page">
    <?php the_title(); ?>
  </div>
</div>
<?php  echo "estoy en ".get_the_ID(); ?>
<?php $pagina_id = get_the_ID(); ?>
<div class="agrupaciones-desglose"><!-- Inicio id agrupaciones-desglose -->
  <div class="c-agrupaciones">
    <?php $the_query = new WP_Query(contenidosPorId('any',$pagina_id,-1)); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <?php get_template_part('template/contenido','ancestro' ); ?>
    <?php endwhile;?>
  </div>
</div><!-- fin id agrupaciones-desglose -->