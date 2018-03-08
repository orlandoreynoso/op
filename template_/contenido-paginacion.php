<div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>

<?php else : ?>

<p><?php _e('Ups!, no hay entradas.'); ?></p>

<?php endif; ?>
