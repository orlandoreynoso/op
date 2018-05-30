<div class="titulo-anuncios">
	<h3>Nuestra vida y nuestra misión</h3>
</div>
<article class="contenidoframe">
	<?php dynamic_sidebar('mision_vision'); ?>
</article>
<?php 	global $post; ?>
<article class="c-info" id="iglesia">

	<div class="vidamision container">
		<div class="row">
				<?php get_template_part( 'template/cover','vida'); ?>
				<?php get_template_part( 'template/cover','mision'); ?>
		</div>
	</div>

</article>
