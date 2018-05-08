<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ekolok
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="description de la page" />
	<!-- favicon with http://realfavicongenerator.net/ -->
     <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico" /> 
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="news-nav">
    	<a href="http://localhost/map/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-ekolok.png" alt="logo-ekolok" class="logo-ekolok"></a>
		    <nav class="globale-menu hide-on-med-and-down">
		   <!-- <?php wp_nav_menu(); ?>  -->

            <div class="menu-primary-menu-container"><ul id="menu-primary-menu" class="menu">
            <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-297 current_page_item menu-item-320" style="position: relative; top: 5px;  "><a href="http://localhost/wordpress/index.php"><i class="material-icons" style="color: #ffffff;">room</i></a></li>
            <li id="menu-item-263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263"><a href="http://localhost/wordpress/index.php/a-propos/" style="font-size: medium;">A propos</a></li>
			<li id="menu-item-269" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-269"><a href="http://localhost/wordpress/#openModal-location" style="font-size: medium;">Locations</a></li>
			<li id="menu-item-267" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-267"><a href="http://localhost/wordpress/#openModal" style="font-size: medium;">Contact</a></li>
			</ul></div>	  

			<!-- <div class="menu-primary-menu-container"><ul id="menu-primary-menu" class="menu">
            <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-297 current_page_item menu-item-320" style="position: relative; top: 5px;  "><a href="http://ekolok.epizy.com/wp/index.php"><i class="material-icons" style="color: #ffffff;">room</i></a></li>
            <li id="menu-item-263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263"><a href="http://ekolok.epizy.com/wp/a-propos/" style="font-size: medium;">A propos</a></li>
			<li id="menu-item-269" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-269"><a href="http://ekolok.epizy.com/wp/#openModal-location" style="font-size: medium;">Locations</a></li>
			<li id="menu-item-267" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-267"><a href="http://ekolok.epizy.com/wp/#openModal" style="font-size: medium;">Contact</a></li>
			</ul></div> -->	



            <!--  Menu --> 

		   
				   <div class="menu-social-f ">
			           <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-facebook1.png" alt="logo-google" class="logo-f"></a>
			       </div>	
			       <div class="menu-social-g">    
					   <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-G.png" alt="logo-google" class="logo-g"></a>
				   </div>	
				   <div class="menu-social-t">       
					   <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-twitter1.png" alt="logo-twitter" class="logo-g"></a>
					</div>   
				      
		    	<!-- <a href="" class="text-menu">Carte</a>
		    	
		    	<a class="text-menu" href="#openModal-location">Location</a>
		    	<a class="text-menu " href="#openModal">Contact</a> -->

		    </nav>
    </div>


 <?php get_template_part('mobile-menu'); ?>



                    <!-- <p style="position: absolute; top: 45px; z-index: 777;">
				      <input name="group1" type="radio" id="test1" />
				      <label for="test1">Yellow</label>
		    		</p>

		    		<p style="position: absolute; top: 85px; z-index: 777; right: 45px;">
				      <a href="http://af25238a.ngrok.io/#openModal-location" style=""><input name="group1" type="radio" id="test2" /></a>
				      <label for="test2">Yellow</label>
		    		</p>

		    		<p style="position: absolute; top: 125px; z-index: 777;">
				      <input name="group1" type="radio" id="test3" />
				      <label for="test3">Yellow</label>
		    		</p>

		    		<p style="position: absolute; top: 165px; z-index: 777;">
				      <input name="group1" type="radio" id="test4" />
				      <label for="test4">Yellow</label>
		    		</p>
 -->
					
<!-- <a href="#openModal">Open Modal</a> -->

<!-- <div id="openModal" class="modalDialog">
    <div>	
      <a href="#close" title="Close" class="close">X</a>
,H,H  H,H,NHNNBF 
    </div>
</div> -->

<!-- <link rel="shortcut icon" type="image/x-icon" href="http://www.geekpress.fr/wp-content/themes/geekpress/design/favicon.ico" /> 
    <link rel="icon" type="image/x-icon" href="http://www.geekpress.fr/wp-content/themes/geekpress/design/favicon.ico" /> 



add_action('wp_head','gkp_custom_favicon', 1);
function gkp_custom_favicon() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="'. get_bloginfo('template_directory') .'/design/favicon.ico" />'."n";
    echo '<link rel="icon" type="image/x-icon" href="'. get_bloginfo('template_directory') .'/design/favicon.ico" />'."n";
}

    -->

     

