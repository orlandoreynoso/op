		        <?php

              global $post;

              $args = array(
                  'post_type' => 'nuestrospilares',
                  'posts_per_page' => -1,
                  'orderby'   => 'menu_order',
                  'order'     => 'ASC'
              );

	    $argslast = array(
	                  'post_type' => 'videoteca',
	                  'posts_per_page' => 1,
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
                     the_post_thumbnail('pilares');
                    }
                    else{ ?>
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pintura-de-Santo-Domingo-de-Guzman.jpg" alt="">
                    <?php  }         ?>
                    </div>
                    <div class="titulo"><span><?php the_title(); ?></span></div>
                    <div class="exe">
											<?php //excerpt('15'); ?>
											<?php echo wp_trim_words( get_the_content(), 8, '...' ); 		 ?>
										</div>
                  </a>
              </div>
              <?php endwhile; wp_reset_postdata(); ?>
