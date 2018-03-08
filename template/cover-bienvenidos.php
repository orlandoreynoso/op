<div class="texto-bienvenida">
  <?php $the_query = new WP_Query(contenidosPorNombre('page','bienvenida',1));  ?>
  <div class="contenidos-c oracion">
    <?php
    while ($the_query -> have_posts()){
      $the_query -> the_post();
      the_content( );
    }
    wp_reset_postdata();
    ?>
  </div>
  <!--a class="btn-msc" href="#">ingresar</a -->
</div>
<div class="buscador-cover">
<?php get_template_part( 'template/header','buscador'); ?>
</div>
