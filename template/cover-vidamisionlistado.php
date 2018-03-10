<div class="titulo-anuncios">
	<h3>Nuestra vida y nuestra misión</h3>
</div>
<article class="contenidoframe">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</article>
<article class="c-info" id="iglesia">

	<?php

		global $post;

		$args = array(
				'post_type' => 'plandevida',
				'posts_per_page' => -1,
				'orderby'   => 'menu_order',
				'order'     => 'ASC'
		);

	?>
	<?php $todos = new WP_Query($args);  ?>

	 <?php

		$total_last = $ultima ->post_count;
		$total= $todos ->post_count;

	?>

		<?php while ($todos-> have_posts()): $todos-> the_post() ?>
			<div id="div1" class="ig-p">
				<a class="pilares-ingreso"  href="<?php the_permalink(); ?>">
					<div class="thumb">

					<?php
					if(has_post_thumbnail()){
					 the_post_thumbnail('video');
					}
					else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pintura-de-Santo-Domingo-de-Guzman.jpg" alt="">
					<?php  }         ?>
					</div>
					<div class="titulo"><span><?php the_title(); ?></span></div>
					<div class="exe"><?php excerpt('15'); ?> </div>
				</a>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>


<?php
		$args = array(
				'post_type' => 'mision',
				'posts_per_page' => -1,
				'orderby'   => 'menu_order',
				'order'     => 'ASC'
		);

	?>
	<?php $todos = new WP_Query($args);  ?>

	 <?php

		$total_last = $ultima ->post_count;
		$total= $todos ->post_count;

	?>

		<?php while ($todos-> have_posts()): $todos-> the_post() ?>
			<div id="div1" class="ig-p">
				<a class="pilares-ingreso"  href="<?php the_permalink(); ?>">
					<div class="thumb">

					<?php
					if(has_post_thumbnail()){
					 the_post_thumbnail('video');
					}
					else{ ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pintura-de-Santo-Domingo-de-Guzman.jpg" alt="">
					<?php  }         ?>
					</div>
					<div class="titulo"><span><?php the_title(); ?></span></div>
					<div class="exe"><?php excerpt('15'); ?> </div>
				</a>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>




</article>
