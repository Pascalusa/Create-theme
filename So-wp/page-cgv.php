<?php
/*
Template Name: CGV elementor
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
  <div id="primary" class="content-area" style="position: relative; top: 5px;">
    <main id="main" class="site-main">

      <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/concept', 'page-cgv' );
      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_template_part( 'footer2' );?>
