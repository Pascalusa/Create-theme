<?php
/*
Template Name: full-location
Template Post Type: post, page, location
*/
?>

<?php get_header(); ?>
 <?php get_template_part('mobile-menu'); ?>
<div style="background-color: #ffffff; height: 550px; position: relative; bottom: 65px; border-bottom: 5px solid #000000; ">
 <img src="<?php bloginfo('stylesheet_directory'); ?>/img/motivo2.png" style="width: 100%;position: relative; bottom: 137px; height: 545px;" class="hide-on-med-and-down"/>
            <div style="position: absolute; left: 50%; top: 47%; transform: translate(-50%, -50%);">
                <figure class="snip1566 z-depth-5">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample14.jpg" alt="sq-sample14" />
                  <figcaption><h5 style="position: relative; text-align: center; top: 55px;"><?php echo infos_principales_get_meta( 'infos_principales_profession_' ); ?></h5></figcaption>
                  <a href="#"></a>
                </figure>
            </div>    
<div  style="height: 180px; background-color: black; width: 72.6%; position: relative; bottom: 323px; margin-left: auto; margin-right: auto;" class="hide-on-med-and-down"></div>
</div>

<div class="card-panel" style=" z-index:99; width: 72%; margin-left: auto; margin-right: auto; margin-top: 105px; background-image:  z-index: 45px;     position: relative;
    bottom: 350px;">
       <div class="row">
        <div class="col s12 ">
            <h4 style="position: relative; font-family: 'Lobster', cursive; text-align: center; color: #000000;"><?php the_title();?></h4>
            </div>
     </div>
     <!-- <h4 style="position: relative; top: 110px; text-align: center; color: #000000;"><?php the_title();?></h4> -->

          <!-- <?php while ( have_posts() ) : the_post(); ?> -->

    
       <div style="width: 70%; height: 2px; background-color: #000000; position: relative; bottom: 20px; margin-left: auto; margin-right: auto;"></div>


            <div class="slider" style="margin: 0px auto 60px!important; margin-left: auto; margin-right: auto; margin-top: 150px; margin-bottom: 60px;">
          <ul class="slides z-depth-3">
              <li><img class="materialboxed" alt="image-location" src="<?php echo image_box_get_meta( 'image_box_imageimage1' ); ?>"> 
            <div class="caption center-align">
            </div></li> <!-- slider1 -->
            <li><img class="materialboxed" alt="image-location" src="<?php echo image_box_get_meta( 'image_box_image2' ); ?>"> 
            <div class="caption center-align">
            </div></li> <!-- slider1 -->
            <li><img class="materialboxed" alt="image-location" src="<?php echo image_box_get_meta( 'image_box_image3' ); ?>"> 
            <div class="caption center-align">
            </div></li> <!-- slider1 -->
            <li><img class="materialboxed" alt="image-location" src="<?php echo image_box_get_meta( 'image_box_image4' ); ?>"> 
            <div class="caption center-align">
            </div></li><!-- slider1 -->
                    </ul>
            </div> 

      <div style="width: 70%; height: 2px; background-color: #000000; position: relative; bottom: 30px; margin-left: auto; margin-right: auto;"></div>
            <div class="row">
                <div class=" col s12 m2 l2 "> 
                   
        </div>

                <div class="row ">
                    <div class="ol s12 m10 l10">
              <div class="center-align">
                 <?php the_content();?>


                 <div class="row" style="width: 65%; position: relative; margin-top: 45px;">
                      <div class="col s12 m12 l4 ">
                      Mise en ligne :
                              <div class="chip  N/A transparent" style="border: 2px solid #e94f06">
                               <!--  <?php echo date_i18n( get_option( 'date_format' ) ); ?>  -->
                                <?php echo 'Il y a ' . human_time_diff(get_the_time('U'), current_time('timestamp')) ; ?>
                              </div>
                </div>
                <div class="col s12 m12 l4 facebook" style="padding: 4px 0px;"> 
                     <div class="fb-like" data-href="https://www.facebook.com/ekolok.org/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                  </div>  
                <div class="col s12 m12 l4 ">              
                       <span style="position: relative;
              bottom: 15px;">Région :</span> <div class="chip N/A transparent"  style="border: 2px solid #e94f06" ; >
                                         <ul class="post-categories" style="position: relative; bottom: 15px;"> <?php the_category(); ?> </ul>
                                     </div> 
                  </div>              
                  </div> 

              </div> 
            </div>      
        </div>      
            </div>  
              <!-- <?php endwhile; wp_reset_query();?>   --> 
</div>  

<section style="    position: relative; bottom: 380px;">
  <a class="btn btn-floating btn-large pulse center-align #ffffff white" onclick="Materialize.fadeInImage('#image-test')" style=" margin-top: -65px; position: absolute;
  left: 50%; transform: translate( -50%);"><i class="material-icons" style="color: #000000;">add</i></a>

<!-- SECTION1 -->
   <div>
        <div class="card-panel" id="image-test" style="width: 72%; opacity: 0; margin-left: auto; margin-right: auto; margin-top: 105px; background-color: rgba(249, 249, 249, 0.94);">   

             <h5 style=" font-family: 'Lobster', cursive; text-align: center;"> Information Principales <h5>
             <div style="width: 70%; height: 2px; background-color: #000000; position: relative; margin-bottom: 25px; margin-left: auto; margin-right: auto;"></div>
                 
                          <div class="row" style="width: 45%;">
                            <div class="row" style="">
                               <div class="center-align col s12 m6 l6 " style="    border-bottom: 2px solid;">
                              <h6>Ville</h6>
                             <div class="chip" style="border: 2px solid #e94f06;">
                             <?php echo infos_principales_get_meta( 'infos_principales_ville' ); ?>
                               </div>
                                </div>
                                <div class=" center-align col s12 m6 l6" style=" border-left: 2px solid #000000;">
                              <h6>Loyer Mensuel</h6>
                               <div class="chip" style="border: 2px solid #e94f06;">
                             <?php echo infos_principales_get_meta( 'infos_principales_loyer_mensuel_' ); ?>
                               </div>
                                </div>
                            </div>
                            <div class="row ">    
                                <div class=" center-align col s12 m6 l6 ">
                              <h6>Disponible</h6>
                               <div class="chip" style="border: 2px solid #e94f06;">
                             <?php echo infos_principales_get_meta( 'infos_principales_disponible_' ); ?>
                               </div>
                        </div>       
                          <div class=" center-align col s12 m6 l6 " style="border-left: 2px solid #000000; border-top: 2px solid;">
                              <h6>Durée</h6>
                               <div class="chip" style="border: 2px solid #e94f06;">
                             <?php echo infos_principales_get_meta( 'infos_principales_dure_' ); ?>
                               </div>
                        </div>       
                            </div>
                        </div> 
      <h5 style=" font-family: 'Lobster', cursive; text-align: center;"> Logement <h5>
          <div style="width: 70%; height: 2px; background-color: #000000; position: relative; margin-bottom: 25px; margin-left: auto; margin-right: auto;"></div>

                                <div class="row range1 "  style="width: 65%;">
                                    <div class="center-align col s12 m9 l4 ">
                                <h6>Type de Logement</h6>
                               <div class="chip" style="border: 2px solid #e94f06;">
                                 <?php echo infos_principales_get_meta( 'infos_principales_type_' ); ?>
                               </div>
                               
                              </div>  

                              <div class="center-align col s12 m9 l4 " >
                                <h6>Occupants Actuels</h6>
                                   <div class="chip" style="border: 2px solid #e94f06;">
                                 <?php echo infos_principales_get_meta( 'infos_principales_occupants_' ); ?>
                               </div>  
                                 
                              </div>   

                              <div class="center-align col s12 m9 l4 "  >
                                <h6>Superficie</h6>
                                    <div class="chip" style="border: 2px solid #e94f06;">
                                   <?php echo infos_principales_get_meta( 'infos_principales_superficie_' ); ?> m²
                                  </div>  
                              </div>  
                      </div>         

                                <div class="row "  style="width: 65%;">
                              <div class="center-align col s12 m9 l4 " >
                                <h6>Nbre de Chambre</h6>
                                    <div class="chip" style="border: 2px solid #e94f06;">
                                  <?php echo infos_principales_get_meta( 'infos_principales_chambre_' ); ?>
                                </div>  
                                 
                              </div>   

                              <div class="center-align col s12 m9 l4 " >
                                <h6>Chambre meublé</h6>
                                  <div class="chip" style="border: 2px solid #e94f06;">
                               <?php echo infos_principales_get_meta( 'infos_principales_chambre-meuble_' ); ?>
                              </div>  
                                 
                              </div>     
                             

                              <div class="center-align col s12 m9 l4 " >
                                <h6>Colocataires recherchés</h6>
                                    <div class="chip" style="border: 2px solid #e94f06;">
                                  <?php echo infos_principales_get_meta( 'infos_principales_type_etudiant_' ); ?>
                                </div> 
                                 
                              </div>  
                      </div>                 

                                <div class="row  "  style="width: 65%;"> 
                              <div class="center-align col s12 m9 l4 " >
                                <h6>Les <span style="font-size: 1.2em; position: relative; left: 5px;">+</span> </h6>
                                    <div class="chip" style="border: 2px solid #e94f06;">
                                  <?php echo infos_principales_get_meta( 'infos_principales_avantage_' ); ?>
                                </div> 
                                 
                              </div>   

                              <div class="center-align col s12 m9 l4 " >
                                <h6>Équipement intérieur</h6>
                                   <div class="chip" style="border: 2px solid #e94f06;">
                                   <?php echo infos_principales_get_meta( 'infos_principales_equipement_int_' ); ?>
                               </div>    
                                 
                              </div>   
                              <div class="center-align col s12 m9 l4 " >
                                <h6>Inclus dans le loyer</h6>
                                   <div class="chip" style="border: 2px solid #e94f06;">
                                   <?php echo infos_principales_get_meta( 'infos_principales_inclus_dans_loyer_' ); ?>
                               </div> 
                                 
                              </div>
                      </div>                               
                      <div style="width: 70%; height: 2px; background-color: #000000; position: relative; margin-bottom: 25px; margin-left: auto; margin-right: auto; position: relative; top: 35px;"></div>
                        <div style="background-color: #eaeaea; position: relative; bottom: 10px; width: 20%; margin-right: auto;
    margin-left: auto;">
                          <a href="http://localhost/wordpress/#openModal" style="font-size: medium;"><button class="btn waves-effect waves-light" style=" margin-left: auto; margin-right: auto; display: block;"><span>Interéssé</span>
                             
                          </button></a>
                        </div>       
        </div>
   </div>
       
  <div>
        <h6 class="center-align" style=" position: relative;
      top: 30px; z-index: 49; color: #ffffff!important; font-family: 'Vollkorn', serif;">
            <a href="#" style="color: #ffffff; font-family: 'Vollkorn', serif; z-index: 49;">©</a> Copyright all rights reserved - <a href="#popup" style="color: #ffffff; font-family: 'Vollkorn', serif; z-index: 49;">Mentions légales</a>
        </h6>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ekolok-ville.png" class="background-ville"; style="width: 100%; position: absolute; margin-top: -300px; z-index: -1;" alt="image-city">
 </div>
</section> 

<?php get_footer(); ?>
 

<style>

@import url('https://fonts.googleapis.com/css?family=Lobster');
@import url('https://fonts.googleapis.com/css?family=Vollkorn');

.card-panel{
background-color: #f5f5f5;
}

  .news-nav {
    position: relative;
}

body,html{
/*background-color: #e7501e!important;*/
/*background: #485563!important;  */
background-color: #b9f6ca!important;  /* fallback for old browsers */
background-color: #b9f6ca!important;  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
z-index:-39!important;
}

p{  color: black;
  width: 75%;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Vollkorn', serif;
    font-size: 1.1em;
}

li,a{
  color: #000000;
}

nav {
    background-color: rgba(238, 110, 115, 0);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0), 0 3px 1px -2px rgba(0, 0, 0, 0);
}

@media screen and (max-width: 400px){
       .card-panel{
width: 100%!important;
}
}


@media screen and (max-width: 1472px){
       .background-ville{
              margin-top: -250px!important;
          }
 }

 @media screen and (max-width: 1227px){
       .background-ville{
              margin-top: -150px!important;
          }
 }

  @media screen and (max-width: 742px){
       .background-ville{
              margin-top: -80px!important;
          }
 }

@media screen and (max-width: 585px){
       .facebook{
margin-bottom: 10%!important;
margin-top: 10%!important;
}
}

@media screen and (max-width: 763px){
       .btn{    position: relative;
    right: 40px;

       }
}


.snip1566 {
  position: relative;
  display: inline-block;
  margin: 20px;
  max-width: 190px;
  width: 100%;
  color: #bbb;
  font-size: 16px;
  box-shadow: none !important;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
}

.snip1566 *,
.snip1566:before,
.snip1566:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.snip1566:before,
.snip1566:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 50%;
  content: '';
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  z-index: -1;
  border: 2px solid #bbb;
  border-color: transparent #bbb;
}

.snip1566 img {
  max-width: 100%;
  backface-visibility: hidden;
  vertical-align: top;
  border-radius: 50%;
  padding: 10px;
}

.snip1566 figcaption {
  position: absolute;
  top: 5px;
  bottom: 5px;
  left: 5px;
  right: 5px;
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.9);
  border-radius: 50%;
}

.snip1566 i {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 4em;
  z-index: 1;
}

.snip1566 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.snip1566:hover figcaption,
.snip1566.hover figcaption {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

.snip1566:hover:before,
.snip1566.hover:before,
.snip1566:hover:after,
.snip1566.hover:after {
  border-width: 10px;
}

.snip1566:hover:before,
.snip1566.hover:before {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.snip1566:hover:after,
.snip1566.hover:after {
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script> 
   $(document).ready(function(){
      $('.slider').slider();
    });
  </script>

  