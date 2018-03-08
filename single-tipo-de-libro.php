<?php

/*
Template Name: Single tipo de libro
Template Post Type: post, page, product, peregrinaciones, boletines, pastorales, reflexiones, books
 */

 get_header();

?>

 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
    <?php echo "Desde el single de tipo-de-libro.php .....ok"; ?>
      <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
<!-- *********************************** -->

     <div class="contenido">
            <!-- div class="date-cat">
              <div class="row">
                  <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php //  the_time('j F, Y'); ?></div>
                  <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php // the_category (' , '); ?></a></div>
              </div>
            </div -->
            <div class="info">
	         <?php while ( have_posts() ) : the_post();  ?>
<?php
echo "<p><b>Ciudad: </b>" . get_post_meta( get_the_ID(), 'info_ref_dato_reflexion', true ) . "</p>";
?>

<?php
echo "<p><b>Ciudad: </b>" . get_post_meta( get_the_ID(), 'info_ref_date_reflexion', true ) . "</p>";
?>

<?php
echo "<p><b>Ciudad: </b>" . get_post_meta( get_the_ID(), 'info_ref_datetwo_reflexion', true ) . "</p>";
?>

              <div class="hora-comida">
        <?php echo get_the_term_list( $post->ID, 'tipo-reflexion', "Hora de Comida: ", ', ',''); ?>
    </div>
            </div>
            <?php

            /*

	          the_content();

            $formato = "d F,Y";
        		$fecha = strtotime(get_field('fecha_de_salida'));

        		$fecha_salida = date_i18n($formato, $fecha);


 echo $fecha_salida;   */?>
        <h2 class="p-itinerario">Galería fotográfica</h2>
        <div class="p-galeria"><?php the_content(); ?></div>
        
<?php      endwhile;         ?>
            </div>
      </div>
<!-- **************************************** -->
  </article>

        <!-- ************** FIN DEL CONTENIDO BLOG ***************  -->

         </div>
        <div class="col-xs-12 col-md-4 contenido-laterales">
          <?php // include (TEMPLATEPATH . '/libs/lateral.php'); ?>
        </div>
     </div>
   </div>
 </section>

<?php
  get_footer();
?>
