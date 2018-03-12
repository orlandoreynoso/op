<!-- div class="titulo-fraile">
	<h3>Vocacional</h3>
</div -->
<article class="c-info" id="fraile">
	<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6 portada">
				<?php

				$args = array(
				'pagename' => 'donacion',
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
				<h3>
					<span class="icono"><i class="fa fa-handshake-o"></i></span>
					<span class="desc">¿Cómo puedes ayudar a nuestra misión?</span>
				</h3>

    </div>
		<div class="col-sm-12 col-md-6 contenido">
				<a class="ingresar" href="<?php the_permalink(); ?>">donar</a>
    </div>
		<?php
		endwhile;
		wp_reset_postdata();
		?>
  </div>
</div>

</article>
