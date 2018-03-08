<?php

/*
Template Name: Single books
Template Post Type: post, page, books
 */

 get_header();

?>

<?php /*==============================*/ ?>

<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="header-title-cpt">
              <div class="titulo">
                <div class="mapeo">
                  <?php dimox_breadcrumbs(); ?>
                  <div class="father_title">
                      <a href="<?php echo get_the_permalink(get_post_ancestor_id()); ?>">
                      <?php echo get_the_title( get_post_ancestor_id()); ?>
                     </a>
                 </div>                   
                </div>
              </div>
              <div class="titulos-page">
                <?php the_title(); ?>
              </div>
            </div>
            <?php  echo  'estoy en single-book.php...';      ?>
<?php 


if (have_posts()) :
   while (have_posts()) : the_post();
      the_content();
    ?>
    
      <?php
   endwhile;
endif;
 
?>


          </div>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>
            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<?php  /*============ fin fin ===================*/ ?>

<?php
  get_footer();
?>
