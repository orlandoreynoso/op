<div class="titulo-general">
	<h3>Dónde estamos en Centroamérica</h3>
</div>

<div class="cuadro-presencia">
	<div class="conventos">

		<div class="titulo-presencia">
			<h3>Conventos</h3>
		</div>


<?php $id = 63; ?>
  <?php $the_query = new WP_Query(construir_presencia($id));  ?>

    <?php
    $id = get_permalink($page);
    $title = get_the_title($page );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
     <div class="contenido">     		
	     <a class_="dato" href="<?php the_permalink(); ?>">
	       <!-- i class="fa fa-angle-double-right"></i -->
	        <div class="thumb" >
	          <?php 
	            if(has_post_thumbnail()){
	            the_post_thumbnail('presencia');
	            }
	            else{ ?>
	              <img class="attachment-presencia size-presencia wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
	            <?php } ?>
				<div class="info-metaboxes">
					<span class="pais">
					<?php echo "" . get_post_meta( get_the_ID(), 'info_adicional_titulo_pais', true ) . ""; ?>
					</span>
				</div>	            
	        </div>
	       <?php // the_title( '',',') ?>
	       <div class="titulo">
	       	<?php the_title(); ?>
	       </div>
	     </a>
    </div>
<?php
  endwhile;
    wp_reset_postdata();
    ?>


	</div>	
	<div class="casas">
	
		<div class="titulo-presencia">
			<h3>Casas</h3>
		</div>


<?php $id = 61; ?>
  <?php $the_query = new WP_Query(construir_presencia($id));  ?>

    <?php
    $id = get_permalink($page);
    $title = get_the_title($page );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
     <div class="contenido">
	     <a class_="dato" href="<?php the_permalink(); ?>">
	       <!-- i class="fa fa-angle-double-right"></i -->
	        <div class="thumb" >
	          <?php 
	            if(has_post_thumbnail()){
	            the_post_thumbnail('presencia');
	            }
	            else{ ?>
	              <img class="attachment-presencia size-presencia wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
	            <?php } ?>
                <div class="info-metaboxes">
                  <span class="pais">
                    <?php echo "" . get_post_meta( get_the_ID(), 'info_adicional_titulo_pais', true ) . ""; ?>
                  </span>
                </div>	            
	        </div>
	       <?php // the_title( '',',') ?>
	       <div class="titulo">
	       	<?php the_title(); ?>
	       </div>
	     </a>
     </div>

<?php
  endwhile;
    wp_reset_postdata();
    ?>


	</div>
</div>

<!-- div class="lugares">
  <?php // $id_presencia = 57; ?>
  <?php /* inc/contenidos/ */ ?>
  <?php // presencia($id_presencia);    ?>
</div -->
