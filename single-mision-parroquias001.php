<?php

/*
$name_template = " Template Name: single Mision Parroquias";
$what_post = "Template Post Type: post, page, product, agrupaciones, books, reflexiones";
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-12 con">
          <div class="interiores">
            <p>single-mision-parroquia.cpt</p>
            <?php get_template_part( 'template/cpt', 'padre');  ?>
          </div>
       </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
