<?php 
// 404 page
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
  
  <link rel="stylesheet" type="text/css" href="//cdn.rawgit.com/ShakrMedia/tuesday/master/build/tuesday.min.css"/>
<!--   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magic/1.1.0/magic.min.css"/> -->
  
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
    <title>So Lunch</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

  <?php wp_head(); ?>
</head>

<img src="<?php bloginfo('stylesheet_directory'); ?>/img/404.png" style="width:50%; position: absolute; transform: translate(-50%, -50%); left: 50%; top: 50%;">

  <button class="btn waves-effect waves-light" style="POSITION: RELATIVE;
    TOP: 500PX;
    BACKGROUND-COLOR: rgb(171, 211, 167);">RETOUR
    <i class="material-icons right">send</i>
  </button>

