<?php
/*
Template Name: Blog elementor
*/
/**
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */
?>
<?php get_header(); ?>

  <div id="primary" class="content-area" style="position: relative; bottom: 5px;">
    <main id="main" class="site-main">

      	

      <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/concept', 'page-blog' );
      endwhile; // End of the loop.
      ?>

      <div class="row" style=" width: 50%; margin-bottom: 55px;">
                          
              	        <!-- Card loop --> 
              	            <?php $args = array('post_per_page' => -1,
                                 'post_type' => 'post',);
                                $query = new WP_Query($args); 
                                while (  $query -> have_posts() ) : $query -> the_post(); ?>
        
                                      <div class="col s12 m12 l12">
                                          <div class="card horizontal z-depth-3">
                                            <div class="card-image">
                                              <?php the_post_thumbnail('small-thumbnails');?>
                                            </div>
                                            <div class="card-stacked">
                                              <div class="card-content valign-wrapper">
                                                <p><?php the_excerpt(); ?></p>
                                              </div>
                                              <div class="card-action">
                                                <a href="#"><?php the_title();?></a>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
        
                              <?php endwhile;?>
                          <!-- Fin Card loop --> 

                      </div>
                  </div> 

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_template_part( 'footer2' );?>

<style>
  
  .card.horizontal .card-image img {
    height:100%!important;
    width: 100%!important;
}
  
  .card.horizontal .card-image {
    max-width: 36%!important;
}


@media screen and (max-width: 400px) {
 .row {
  width: 100%!important;
}
}
</style>
