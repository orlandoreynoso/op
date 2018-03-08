<?php 


/*

function create_page($pagina, $perpage){
    $args = array(
        'post_type' => 'page',
        'post_parent'       => ''.$pagina.'',
        'posts_per_page'         => ''.$perpage.'',
    );
    return $args;
}
*/

             ?>

<?php echo  $pagina_id = get_the_ID();  ?>
<?php 
//$the_query = new WP_Query(create_page($pagina_id,$perpage_actually));
 ?>


<?php 

  global $post;
        /* Get an array of Ancestors and Parents if they exist */
  $parents = get_post_ancestors( $post->ID );

print_r($parents);

$estamos = get_post($parents[0]);
?>

  <p>contenido estamos</p>
<pre>
<?php print_r($estamos);  ?>
</pre>
<p>fin de contenido estamos</p>
<?php
echo $estamos->post_title;

  echo "<p>ancestro Inicio===========</p>";
        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
    $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
  /* Get the parent and set the $class with the page slug (post_name) */
        $parent = get_post( $id );
  ?>
  <pre>
    <?php var_dump($parents); ?>
  </pre>
  <?php
  echo $class = $parent->post_name;

  echo "<p>========ancestro fin</p>";
  $class02 = get_the_post_thumbnail( $parent, 'thumbnail');
  $class03 = get_the_permalink( $id);
  $titulito = $parent->post_title;
  ?>
  <img src="<?php echo $class02; ?>" alt="">
  <a href="<?php echo $class03; ?>"><?php echo $titulito; ?></a>
  <?php
  echo "<p>========ancestro fin</p>";


/////
  

// Your functions.php content
function has_children() {
  
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  
  return count($pages);
}
function is_top_level() {
  global $post, $wpdb;
  
  $current_page = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = " . $post->ID);
  
  return $current_page;
}
// Somewhere in your template
echo '<ul>';
  $base_args = array(
    'hierarchical' => 0
  );
  if (has_children()) {
    $args = array(
      'child_of' => $post->ID,
      'parent' => $post->ID
    );
  } else {
    if (is_top_level()) {
      $args = array(
        'child_of' => $post->post_parent,
        'parent' => $post->post_parent
      );
    } else {
      $args = array(
        'parent' => 0
      );
    }
  }
  
  $args = array_merge($base_args, $args);
  
  $pages = get_pages($args);
  
  foreach ($pages as $page) {
    echo '<li><a href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a></li>';
  }
echo '</ul>';

?>