<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ekolok
 */



get_header(); ?>


<div id="globale-copyright"  style="font-family: 'Vollkorn', serif;">
      <h6>
          <a href="#" style="font-family: 'Vollkorn', serif; color: #ffffff;">©</a> Copyright all rights reserved - <a href="#popup"  style="font-family: 'Vollkorn', serif; color: #ffffff;">Mentions légales</a>
      </h6>
</div>


   <!-- ******************************************************************************
                                    Map
 ****************************************************************************** -->
 
 <iframe src="https://www.google.com/maps/d/embed?mid=14Iw3mfu3dnEzYyveMUKAOFCsMfA" style="width: 100%; height:99vh; position:relative; bottom: 49px"></iframe>

 <!-- ******************************************************************************
                                  Contact
 ****************************************************************************** -->

 <?php get_template_part('contact'); ?>

  <!-- ******************************************************************************
                                    location
   ****************************************************************************** -->

    <?php get_template_part('location'); ?>

<?php get_footer(); ?>
