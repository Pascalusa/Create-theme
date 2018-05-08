<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package So_Lunch
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <!-- <meta http-equiv="refresh" content="5; url=http://nimishprabhu.com/"> -->

  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Pacifico" rel="stylesheet"> 
  
  <!-- lertifyjs CSS -->
<!--   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
  <!-- lertifyjs Default theme -->
<!--   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/> -->
  <!-- lertifyjs Semantic UI theme -->
<!--   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/> -->
   
  <!-- owl.carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
  
<!--   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/> -->
  
  <!--  ANIMATION magic.min -->
  <link rel="stylesheet" type="text/css" href="//cdn.rawgit.com/ShakrMedia/tuesday/master/build/tuesday.min.css"/>
<!--   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magic/1.1.0/magic.min.css"/> -->
  
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
    <title>So Lunch</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
            <nav class="nav-nav" style="z-index:1;  background-color:rgba(191, 25, 25, 0)!important; position: absolute; top: 0px; box-shadow :0 2px 2px 0 rgba(0, 0, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0), 0 3px 1px -2px rgba(0, 0, 0, 0); border-bottom: 2px solid;">
              <div class="nav-wrapper">
                <div class="row">
                    <ul id="" class="right hide-on-med-and-down" style="font-family: 'Muli', sans-serif; z-index: 999; width: 100%;">
                     <li style="background-color: #ffffff; height: 100px; width: 100px;position: relative;left: 90px;
          margin-right: 150px; z-index: 9; border-radius: 50%;
          top: 12px;"> <a href="<?php bloginfo('url'); ?>"><img style="width: 158%!important;
    position: relative;
    right: 18px;
    bottom: 11px;" src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" class="logo"></a></li>
                      <!-- <li><a href="http://localhost/wordpress-so/index.php/index/">Accueil</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/notre-concept/">Notre Concept</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/nos-engagements/">Nos Engagements</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/blog/">Blog/</a></li>
                      <li><a href="http://localhost/wordpress-so/index.php/jobs/">Jobs</a></li>
                      <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Contact</a></li> -->   


                     <div style=" 
    position: relative;
    height: 90px;"> 
                           <?php 
                                
                                wp_nav_menu( array(
                                  'theme_locaion' => 'primary',
                                  ));
                           ?>   
                     </div> 

                    </ul>
                    <div class="hide-on-med-and-down" style="    height: 38px;
    border: 2px solid #abd3a7;
    width: 175px;
    position: absolute;
    right: 0;
        z-index: -2;
    margin-right: 20px;
    top: 13px;"></div>
                </div>  
              </div>
            </nav> 

            <!-- menu mobile -->

<!--             <div  class="hide-on-large-only" style=" position: absolute; top: 0px; z-index: 777; width:100%; ">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style="    width: 109px;
          margin-right: auto;
          margin-left: auto;
          border-radius: 50%;
          display: block;
          padding: 4px;
          background-color: #ffffff;" >
         </div>   -->
   
          <div class="hide-on-large-only" style="    width: 100px;
                       height: 100px;
          margin-right: auto;
          margin-left: auto;
                      z-index: 992;
                      position: absolute;

                  transform: translate(-50%); left: 50%;
          border-radius: 50%;
          display: block;
          background-color: #ffffff;" > <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style=" WIDTH: 105PX;
    POSITION: RELATIVE;
    TOP: -6PX;
    RIGHT: 0PX;" ></div>

          <div id="sidebar" class="hide-on-large-only" style="z-index: 1000;">
        <ul>
         
         <div style=" margin-right: auto; margin-left: auto;">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style="width: 77%; margin-right: auto; margin-left: auto; display: block;" >
         </div>  

         <li class="text-menu"><a href="<?php bloginfo('url'); ?>/">Accueil</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="<?php bloginfo('url'); ?>/notre-concept/">Notre concept</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="<?php bloginfo('url'); ?>/nos-engagements/">Nos engagements</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="<?php bloginfo('url'); ?>/blog/">Blog/</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
          <div class="divider"></div>
          <li class="text-menu"><a href="<?php bloginfo('url'); ?>/jobs/">Jobs</a></li>
          <div class="divider"></div>
          <li class="text-menu" ><a href="<?php bloginfo('url'); ?>/commander-en-ligne/">Commander en ligne</a></li>
          <div class="divider"></div>
        </ul>
        
            <div id="toggle">
              <span></span>
              <span></span>
              <span></span>
            </div>  
      </div>
<style>
.commander {
    float: right;
} 
.hide-on-med-and-down {
    float: left!important;
    margin-left: -21px;
}

  #sidebar{
  width:200px;
  height:100%;
      background-color: #ffffff;
  position:fixed;
  top:10px;
  left:-200px;
  transition:linear .4s left;
  z-index: 999;
}
#sidebar.active{
  left:0px;
  transition:linear .4s left;
}
ul{
  list-style:none; 
}

.text-menu, a{
  color: black;
  text-align: center;
  font-family: 'Muli', sans-serif;"
}

.text-menu{
  text-decoration:none;
  display:block;
  width:180px;
  padding:10px;
  font-size:18px;
  font-family:"verdana",open sans;
 
}
.text-menu:hover{
  background-color:#abd3a7;
}
#toggle{
  width:20px;
  height:20px;
  background-color: #ffffff00;
  position:absolute;

  top:0px;
  left:205px;
  cursor:pointer;
  margin:10px;
}
#toggle span{
  height:3px;
  background:black;
  display:block;
  margin-bottom:5px;
}
</style>

    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
      $('#toggle').click(function(){
        $('#sidebar').toggleClass('active');
      });
    });
    </script>
  
 