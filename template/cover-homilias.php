
<?php

$page_actually = 930;
$perpage_actually = 1;
$day = $perpage_actually-1;

$the_query = new WP_Query(create_page($page_actually,$perpage_actually));

?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	  	<?php // obtener_homilia('Homilias','homilia',$page_actually);  ?>
<div class="c-e">
    <?php

    $id = get_permalink($page_actually);
    $title = get_the_title($page_actually);
    //echo $id;
    ?>

    <a class="enlace" href="<?php the_permalink(); ?>">
    	<div class="thumb"><?php the_post_thumbnail('espiritualidad'); ?></div>
			<div class="titulo"><?php the_title(); ?></div>
		</a>
		<div class="label-homilia">
			<a>homilia tal</a>
		</div>

<?php endwhile;?>
