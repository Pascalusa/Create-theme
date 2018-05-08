<!-- Modal Auvergne Rhône Alpe -->
    <div id="modal-auvergne" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Auvergne Rhône Alpes</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 5, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div>                     
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>  

<!-- Modal Bourgogne Franche Comté -->
    <div id="modal-bourgogne" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Bourgogne Franche Comté</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                 <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 1, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>  

<!-- Modal Bretagne -->
    <div id="modal-bretagne" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Bretagne</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                 <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 6, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>  

<!-- Modal Centre Val de Loire -->
    <div id="modal-centre" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Centre Val de Loire</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
                <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 7, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
    </div>    
    
<!-- Modal Corse -->
    <div id="modal-corse" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Corse</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                 <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 8, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>       

<!-- Modal Grand Est -->
    <div id="modal-grand-est" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Grand Est</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                 <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 9, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>     

<!-- Modal Hauts-de-France -->
    <div id="modal-haut-de-france" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Hauts de France</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                  <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 10, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>      

<!-- Modal Ile de france -->
    <div id="modal-ile-de-france" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Ile de france</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                 <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 11, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>       

<!-- Modal Normandie -->
    <div id="modal-normandie" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Normandie</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 12, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>       

<!-- Modal Nouvelle Aquitaine -->
    <div id="modal-nouvelle-aquitaine" class="modal bottom-sheet">
      <div class="modal-content">
        <h4 class="center-align">Nouvelle Aquitaine</h4>
        <hr style="background-color: black; height: 1px; margin-bottom: 35px;">
                <div class="row">
                   <!-- Card loop --> 
                          <?php $args = array('post_per_page' => -1,
                                              'post_type' => 'post',
                                              'cat' => 13, );
                              $category = new WP_Query($args); 
                              while (  $category -> have_posts() ) : $category -> the_post(); ?>

                            <div class="col s12 m6 l3">  
                                  <div class="card">
                                        <div class="card-image">

                                                <?php the_post_thumbnail('small-thumbnails');?>  
 
                                           <span class="card-title"><?php the_title();?><?php get_template_part('date-city'); ?></span>
                                          <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light  pulse red><i class="material-icons"><span style=" font-size: 2em; margin-left: 11px;">+</span></a>
                                        </div>
                                        <div class="card-content">
                                          <?php the_excerpt(); ?>
                                        </div>
                                  </div>
                            </div>
                          <?php endwhile;?>  <!-- Fin Card loop --> 
                </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
      </div>
    </div>               
      
<style>
  .modal.bottom-sheet {
    top: auto;
    bottom: -100%;
    margin: 0;
    width: 100%;
    max-height: 75%!important;
    border-radius: 0;
    will-change: bottom, opacity;
}
</style>

<script>

$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.dropdown-button').dropdown('open');
    
  });
  
</script>

 <script type=text/javascript  src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>