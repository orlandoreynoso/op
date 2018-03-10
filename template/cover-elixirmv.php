
<?php $pagename = 'plan-de-vida'; ?>
<?php
    $the_query = new WP_Query(create_pagename($pagename));
//      $id = get_permalink($the_query);
//        $title = get_the_title($the_query );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
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
<?php
  endwhile;

?>

<?php $pagenamemision = 'principales-ejes-de-la-mision'; ?>
<?php
    $the_query = new WP_Query(create_pagename($pagenamemision));
//      $id = get_permalink($the_query);
//        $title = get_the_title($the_query );
     while($the_query->have_posts()) : $the_query->the_post();  ?>
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
<?php
  endwhile;

?>
