<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="pie" class="pie">
					<div class="footer-left">
						<p>Desarrollado por: <a href="http://www.orlandoreynoso.com">@orlandoreynoso</a> to © San Vicente Ferrer</p>
						<!-- div class="search"><?php // get_search_form(); ?></div -->
					</div>
					<div class="footer-right">
						<div class="or-redes">
							<?php
								$argsr = array(
									'theme_location' =>'menu-redes',
									'container' => 'nav',
									'container_id'  => 'sociales',
									'container_class'=> 'sociales',
									'link_before' => '<span class="sr-text">',
									'link_after' => '</span>',
									'items_wrap' => '<ul id="menu-social" class="menu">%3$s</ul>'
								);
								wp_nav_menu($argsr);
							?>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
