<?php

?>

<!-- Modal location Structure -->
    <div id="openModal-location" class="modalDialog">
      <div> 
        <a href="#close" title="Close" class="close">X</a>

                    <div class="row">
                                    <!-- Content--> 
                          <div class="row">
                              <div class="col s12 m12 l11 ">
                                     <h4 class="center-align">Locations</h4>
                              </div>  
                              <div class="col s12 l1" style="position: relative; top: 15px;">     
                                     <!-- Dropdown Trigger -->
                                    <a class='dropdown-button btn' style="left: 50%;
                                     transform: translate(-50%); position: relative;" href='#' data-activates='dropdown1'>Régions
                                    </a>
                              </div>      
                          </div>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown1' class='dropdown-content'>
                                      <li><a href="#modal-auvergne" class="modal-trigger">Auvergne Rhône Alpe</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-bourgogne" class="modal-trigger">Bourgogne Franche Comté</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-bretagne" class="modal-trigger">Bretagne</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-centre" class="modal-trigger">Centre Val de Loire</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-corse" class="modal-trigger">Corse</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-grand-est" class="modal-trigger">Grand Est</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-haut-de-france" class="modal-trigger">Hauts-de-France</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-ile-de-france" class="modal-trigger">Ile de france</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-normandie" class="modal-trigger">Normandie</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#modal-nouvelle-aquitaine" class="modal-trigger">Nouvelle Aquitaine</a></li>
                                    </ul>
                               <!-- Fin Dropdown Trigger -->     

                              <hr style="background-color: black; height: 1px; margin-bottom: 35px;">   
                               
                               <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                               'post_type' => 'post',);
                              $query = new WP_Query($args); 
                              while (  $query -> have_posts() ) : $query -> the_post(); ?>

                            <div class="col s12 m6 l4">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red"><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>             
                    </div>  
                    <?php get_template_part('modal-category'); ?>    
      </div>
    </div>    
<script>

$(document).ready(function(){
   (function($) {
    $(function() {

$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      hover: true, // Activate on hover
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );

    }); // End Document Ready
})(jQuery); // End of jQuery name space
  });
  
</script>

 <script type=text/javascript  src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>