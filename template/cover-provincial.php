<div class="img-provincial"><!-----Iniciar cuadro provincial --- -->
  <img class="p-logo" src="<?php echo IMAGES.'/provincial.jpg'; ?>" alt="Fray Carlos Antonio Cáceres Pereira">
  <div class="p-mensaje">
    <p>Prior PrFray Carlos Antonio Cáceres Pereira ha sido reelegido como Prior Privincial por los frailes capitulares del III Capítulo Provincial en Guatemala de la Provincia de San Vicente Ferrer en Centroamérica. La elección ha sido confirmada por el Maestro de la Orden, fr. Bruno Cadoré, OP.ivincial</p>
  </div>
  <div class="p-firma">
    <div class="nombre">
          <p>Fray Carlos Antonio Cáceres Pereira</p>
    </div>
    <div class="orden">
        <p>Prior Privincial</p>
    </div>
  </div>
  <div class="link-provincial">
      <?php

      $args = array(
      'pagename' => 'mensajes-provincial',
      'post_type' => 'any',
      'post_status' => 'publish',
      //Order & Orderby Parameters
      'order'               => 'DESC',
      'orderby'             => 'date',
      //Pagination Parameters
      'posts_per_page'         => 1,
      );


       ?>

  <?php $the_query = new WP_Query($args);  ?>
    <?php
    $id = get_permalink($page);
    $title = get_the_title($page );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
        <a class="ingresar"  href="<?php the_permalink(); ?>">
          <?php echo "Leer mensajes"; ?>
        </a>
        <a class="thumb" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full'); ?>            
        </a>
<?php
  endwhile;
    wp_reset_postdata();
    ?>


    
  </div>

</div><!------------- fin cuadro provincial - ----------------- -->
<div class="catequesis">
  <div class="titulo-catequesis">
    <h3>Recursos Pastorales</h3>
  </div>
  <div class="contenido">
    <!-- p class="texto">Últimos ingresos:</p -->
    <?php  get_template_part( 'template/cover', 'recursos'); ?>
    <?php  get_template_part('template/cover', 'portadarecursos'); ?>
  </div>
</div>
