<!-- div class="titulo-fraile">
	<h3>Vocacional</h3>
</div -->
<article class="c-info" id="fraile">
	<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-7 portada">

				<?php

				$args = array(
				'pagename' => 'vocacional',
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
					<a class="imgpresencia" href="<?php the_permalink(); ?>">
						<div class="thumb">
							<?php the_post_thumbnail('fraile'); ?>
						</div>
							<h3 class="pregunta">¿Quieres ser Fraile Dominico?</h3>
					</a>

    </div>
		<div class="col-sm-12 col-md-5 contenido">
			<div class="titulo-fraile">
				<h3>Descubre tu vocación</h3>
			</div>
			<div class="textofraile">
				<p class="mensaje">“Anunciaremos el Evangelio de la vida. Continuaremos dando “razón de nuestra esperanza” a cada una de las personas que el Señor colocará en nuestros caminos”.</p>
				<h4 class="firma">Santo Domingo de Guzmán</h4>
				<a class="ingresar" href="<?php the_permalink(); ?>">» Ingresa para más información</a>
			</div>
    </div>
		<?php
		endwhile;
		wp_reset_postdata();
		?>
  </div>
</div>

</article>
