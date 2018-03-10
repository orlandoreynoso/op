<div class="titulo-presencia">
	<h3>Nuestros Pilares</h3>
</div>
<div class="lugares">


            <?php

            $id_presencia = 57;

            $args = array(
            //'pagename' => 'donde-estamos-en-centroamerica',
            'post_type' => 'any',
            'post_status' => 'publish',
            'post_parent' => $id_presencia,
            //Order & Orderby Parameters
            'order'               => 'DESC',
            'orderby'             => 'date',
            //Pagination Parameters
            'posts_per_page'         => -1,
            );


             ?>

        <?php $the_query = new WP_Query(construir_presencia($id_presencia));  ?>
        <div class="contenido">
          <?php
          $id = get_permalink($page);
          $title = get_the_title($page );
           while($the_query->have_posts()) : $the_query->the_post();  ?>
          <div class="lista">
              <h5><a href="<?php the_permalink(); ?>" class="cat"><?php the_title();  ?></a></h5>
              <?php echo get_the_id(); ?>
          </div>
      <?php
        endwhile;
          wp_reset_postdata();
          ?>
        </div>
        <div class="listado">
        <p>Aqui el lsitado</p>
        </div>
</div>
