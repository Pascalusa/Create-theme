<?php 

// Si envoyé, analyser les données du formulaire et les stockers dans les variables.
// if(isset($_POST['submit'])) {

// $name = htmlspecialchars($_POST['Nom_du_client']);
// $mail = htmlspecialchars($_POST['E-mail_du_client']);
// $date = htmlspecialchars($_POST['Date']);
// $horaire = htmlspecialchars($_POST['Tranche_horaire']);
// $menu = htmlspecialchars($_POST['menu']);

// // Mosaik Créer un fichier de type 'contact'
// $location_post = array(
// 'post_title' =>  "$name || $mail",
// 'post_content' => "  Nom du client :  $name 
//                   -----------------------
//                   Email du client : $mail  
//                   -----------------------
//                   Date : $date
//                   -----------------------
//                   Tranche horaire : $horaire 
//                   -----------------------
//                   Menu : $menu " ,
// 'post_type' => "reservation",
// 'post_status' => "publish"
//   );
// wp_insert_post($location_post);
// }

// ?>


<div class="globale-title1" style=" top: 120px; position: relative;  ">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/hot-soup-bowl2.png" style="width: 85px;
       
    position: absolute;
    top: -5px;
    transform: translate(-50%);
    left: 50%;"> 
</div>    

<form action="https://formspree.io/pascal.webdesigner@gmail.com" method="POST" style="position: relative;top: 44px;">
  
  <!-- Modal Structure -->
          <div id="modal11" class="modal  animated tdPlopIn">
            <div class="modal-content  z-depth-3" style="margin-top: 45px; margin-right:auto; margin-left:auto; background-color: white;
    width: 285px;">
               <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style="height: 63px;
    width: 63px;
    position: absolute;
    z-index: 99;
    transform: translate(-50%);
    left: 50%;
    background-color: #ffffff;
    border-radius: 35px;
    top: 24px;">
              <p>
                <input type="checkbox" id="test1" onclick="toggleByClass('soja')" />
                <label for="test1">SOJA</label>
              </p>
              <p>
                <input type="checkbox" id="test2" onclick="toggleByClass('gluten')" />
                <label for="test2">GLUTEN</label>
              </p>
              <p>
                <input type="checkbox" id="test3" onclick="toggleByClass('produits-laitiers')" />
                <label for="test3">PRODUIT LAITIERS</label>
              </p>
               <p>
                <input type="checkbox" id="test4" onclick="toggleByClass('poisson')" />
                <label for="test4">POISSON</label>
               </p>
              <p>
                <input type="checkbox" id="test5" onclick="toggleByClass('viande')" />
                <label for="test5">VIANDE</label>
               </p>
              
<!--                       <div class="row" >
                        <div class="col s12  m12 l4 ">                  
                           <a onclick="toggleByClass('soja')" class="collection-item" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important;     border-radius: 20px; margin-right: auto; margin-left: auto; display: block;">SOJA</a>
                        </div>
                        <div class="col s12 m12 l4">              
                           <a onclick="toggleByClass('gluten')" class="collection-item" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; border-radius: 20px; margin-right: auto; margin-left: auto; display: block;">GLUTEN</a>
                        </div>
                        <div class="col s12 m12 l4 ">
                             <a onclick="toggleByClass('produits-laitiers')" class="collection-item" style="border-radius: 20px; top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">PRODUIT LAITIERS</a> 
                        </div>
                      </div>
 -->
                      <!-- Suite bouton -->

<!--                       <div class="row" style="width: 70%;" >
                          <div class="col s12  m12 l4">
                              <a onclick="toggleByClass('poisson')" class="collection-item" style="top: 150px; padding: 7px 25px;border-radius: 20px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">POISSON</a>
                          </div>
                          <div class="col s12 m12 l4">
                               <a onclick="toggleByClass('viande')" class="collection-item" style="top: 150px; padding: 7px 25px;  border-radius: 20px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">VIANDE</a>
                          </div>
                      </div> -->
              <!--Button Close-->
                       <a class="modal-action modal-close" style="position: relative; float: right; bottom: 204px;
                    padding-right: 20px;"><span style="font-size: 1.5em; color:#000;">X</span></a>
            </div>
            
            
                      
          </div>

              <!-- Modal Structure -->
              <div id="modal10" class="modal modale modal-trigger animated tdPlopIn open" style=" background-color: #4ab794e0!important; border-radius: 45px!important;">
                
                <!-- fermeture modale -->
                <a class="modal-action modal-close" style="position: absolute; right: 0px;top: 3%; margin-right: 32px; z-index: 99;"><span style="font-size: 1.5em; color:#fff;">X</span></a>
                

                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" style="height: 107px; width: 107px; position: absolute; z-index: 99;transform: translate(-50%); left: 50%;
                      background-color: white; border-radius: 35px; top: 52px; border-bottom: 5px solid;">

                <div class="modal-content" style="position: relative; bottom: 20px; height: 127px; background-color: #1f866996;">
                      <div class="row" style=" position: relative; top: 140px;">
                        <div class=" input-field col s12">
                          
                          <input  id="first_name" type="text" name="Nom_du_client" class="validate" style="border-bottom: 2px solid #000!important;">
                          <label for="first_name">Nom</label>
                         
                        </div>
                        <div class=" input-field col s12">
                          <?php $email ="email";?>
                          <input type="hidden" name="_next" value="<?php bloginfo('url'); ?>/commander-en-ligne/" />
                          <input id="email" type="email" name="_cc" name="<?php echo $email;?>" class="validate" style="border-bottom: 2px solid #000!important;">
                          <label for="email">E-mail</label>

                        </div>
                        <?php 
                        // https://www.youtube.com/watch?v=BYNLXZyn9NU
                        $aujourdhui = date( ' d / m / Y' );
                        $demain = date( ' d / m / Y', time()+(24*3600) );
                        $jour2 = date( ' d / m / Y', time()+(48*3600) );
                        $jour3 = date( ' d / m / Y', time()+(72*3600) );
                        $jour4 = date( ' d / m / Y ', time()+(96*3600) );
                        $jour5 = date( ' d / m / Y ', time()+(120*3600) );
                        $jour6 = date( ' d / m / Y ', time()+(144*3600) );
                        
                        ?>
                        <div class="col s12 m12 l6">     
                          <div class="input-field col s12">
                            <select  id="jour" name="jour">
                              <option value="<?php echo $aujourdhui;?>">Aujourd'hui</option>
                              <li><div class="divider"></div></li>
                              <option value="<?php echo $demain;?>">Demain</option>
                              <li><div class="divider"></div></li>
                              <option value="<?php echo $jour2;?>"><?php echo $jour2;?></option>
                             <li><div class="divider"></div></li>
                              <option value="<?php echo $jour3;?>"><?php echo $jour3;?></option>
                              <li><div class="divider"></div></li>
                              <option value="<?php echo $jour4;?>"><?php echo $jour4;?></option>
                              <li><div class="divider"></div></li>
                              <option value="<?php echo $jour5;?>"><?php echo $jour5;?></option>
                            </select>
                            <label>Jours <span style="color:red;">(Fermé le Dimanche et jours fériés) <span></label>
                          </div>
                       </div>
                        
                        <div class="col s12 m12 l6">   
                          <div class="input-field col s12">
                            <select id="heure" name="heure">
                              <option value="12:30 - 12:45">12:30 - 12:45</option>
                              <li><div class="divider"></div></li>
                              <option value="12:45 - 13:00">12:45 - 13:00</option>
                              <li><div class="divider"></div></li>
                              <option value="13:00 - 13:15">13:00 - 13:15</option>
                              <li><div class="divider"></div></li>
                              <option value="13:15 - 13:30">13:15 - 13:30</option>
                              <li><div class="divider"></div></li>
                              <option value="13:30 - 13:450">13:30 - 13:45</option>
                              <li><div class="divider"></div></li>
                              <option value="13:45 - 14:00">13:45 - 14:00</option>
                              <li><div class="divider"></div></li>
                              <option value="14:00 - 14:15">14:00 - 14:15</option>
                              <li><div class="divider"></div></li>
                              <option value="14:15 - 14:30">14:15 - 14:30</option>
                              <li><div class="divider"></div></li>
                              <option value="14:30 - 14:45">14:30 - 14:45</option>
                              <li><div class="divider"></div></li>
                              <option value="14:45 - 15:00">14:45 - 15:00</option>
                              <li><div class="divider"></div></li>
                              <option value="15:00 - 15:15">15:00 - 15:15</option>
                              <li><div class="divider"></div></li>
                              <option value="15:15 - 15:30">15:15 - 15:30</option>
                              <li><div class="divider"></div></li>
                              <option value="15:30 - 15:45">15:30 - 15:45</option>
                              <li><div class="divider"></div></li>
                              <option value="18:00 - 18:15">18:00 - 18:15</option>
                              <li><div class="divider"></div></li>
                              <option value="18:15 - 18:30">18:15 - 18:30</option>
                              <li><div class="divider"></div></li>
                              <option value="18:30 - 18:45">18:30 - 18:45</option>
                              <li><div class="divider"></div></li>>
                              <option value="18:45 - 19:00">18:45 - 19:00</option>
                              <li><div class="divider"></div></li>
                              <option value="19:00 - 19:15">19:00 - 19:15</option>
                            </select>
                            <label>Horaires</label>
                          </div>
                        </div>  
                            
                        <div class="col s12 m12 l6">
                            <div class="input-field col s12">
                              <select id="point d'enlèvement" name="point d'enlèvement">
                                <option value="So Lunch restaurant">So Lunch restaurant</option>
                              </select>
                              <label>-- Point d'enlèvement --</label>
                            </div>
                        </div>
                        
                      </div>
                      <!-- buton valider -->
                       <div class="col s12 l12 " style="top: 130px; position: relative;">
                         <input style="border: 2px solid; font-weight: 800!important; margin-left: auto; display: block; background-color: #7bb6a4;
                         margin-right: auto;" type="submit" class="btn" value="Valider" target="_blank" style="font-family: 'Josefin Sans', sans-serif; transform: translate(-50%); left: 50%;  position: absolute;">
                         <input type="hidden" name="_subject" value="Nouvelle réservation"/>
                         <input type="hidden" name="_cc" value="" />
                         <input type="text" name="_gotcha" style="display:none" />
                      </div>
                </div>
              </div> 
              <!-- fin modale -->
              <div>

                  <div class="row" style="width: 300px;position: relative; top: 202px;z-index: 20;">
                    <div class="col s12 l6">
                      
                    <a class="snipcart-checkout reservation" href="#modal10"  data-item-custom1-name="Jours (Fermé le Dimanche et jours fériés)"
  data-item-custom1-options="<?php echo $aujourdhui ?>| <?php echo $demain ?>| <?php echo $jour2 ?>| <?php echo $jour3 ?>|<?php echo $jour4 ?>| <?php echo $jour5 ?>| <?php echo $jour6 ?>" 
  data-item-custom2-name="Horaires"
  data-item-custom2-options="12:30 - 12:45| 12:45 - 13:00| 13:00 - 13:15| 13:15 - 13:30 |13:30 - 13:45 |13:45 - 14:00|14:15 - 14:30|14:30 - 14:45|14:45 - 15:00|15:00 - 15:15|15:15 - 15:30|15:30 - 15:45|18:00 - 18:15|18:15 - 18:30|18:30 - 18:45|18:45 - 19:00|19:00 - 19:15" class="snipcart-add-item" data-item-id="75b" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" 
                                               data-item-price="" data-item-name="Réservation" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">RÉSERVER</a> 

                    </div>
                    <div class="col s12 l6" id="diet">  

                    <a data-position="top" data-delay="50" data-tooltip='Indiquez vos restrictions alimentaires'  class="waves-effect modal-trigger tooltipped" href="#modal11" style="    background-color: rgba(171, 211, 166, 0); padding: 7px 42px;z-index: 29;
                      border: 2px solid white; color: #fff;">DIET</a>
                    
                </div>    

                    </div>
                  </div>
                    
      <div class="row global-tab" style="position: relative; top: 55px;">
             
    <div class="global-tab-mobile" style="    position: relative;
    bottom: 155px;">

      <ul class="tabs " id="tab2" style="overflow: hidden;
    height: 200px;
    transform: translate(-50%)!important;
    left: 50%!important;
    position: absolute!important;
    width: 100%;
    ">
           
        <!--   TAB computer    -->
        
         <div class="pindicator">
  <div class="bullet past">
    <a href="#g0" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(12);?>' class="tooltipped"><span class="icon z-depth-3">1</span></a>
     <!--     base     -->
  </div>
  <div class="bullet current">
    <a href="#g1" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(3);?>' class="tooltipped"><span class="icon z-depth-3">2</span></a>
  </div>
  <div class="bullet next future">
    <a href="#g2" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(1);?>' class="tooltipped" ><span class="icon z-depth-3">3</span></a>
  </div>
  <div class="bullet future">
    <a href="#g3" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(8);?>' class="tooltipped"><span class="icon z-depth-3">4</span></a>
  </div>
  <div class="bullet future">
   <a href="#g4"  data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(9);?>' class="tooltipped" ><span class="icon z-depth-3">5</span></a>
  </div>
  <div class="bullet future">
    <a href="#g5" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(10);?>' class="tooltipped"><span class="icon z-depth-3">6</span></a>
  </div>
   <div class="bullet future">
    <a href="#g6" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(11);?>' class="tooltipped"><span class="icon z-depth-3">7</span></a>
  </div>                 
                    
</div>

        <div class="row " style="width: 100%; height: 400px!important;">
              <div class=" col s12 m12 l10" style="transform: translate(-50%)!important; left: 50%!important; position: absolute!important;">
                <div class="global-tab2" style="transform: translate(-50%)!important;
                                              left: 50%!important;
                                              position: absolute!important;
                                              width: 787px;
                                              padding-left: 45px;">
                  <?php 
                  $bases = get_cat_name(12);
                  $veggies = get_cat_name(3);
                  $proteines = get_cat_name(1);
                  $graine = get_cat_name(8);
                  $plus = get_cat_name(9);
                  $assortiments = get_cat_name(10);
                  $dessert = get_cat_name(11);
                  ?> 
                  
                  
                  <!--  MOBILE tab  --> 
                <div class="z-depth-3 hide-on-large-only" style="background-color: #abd3a6; width: 232px; height: 259px; padding-top: 26px; border-radius: 20px;
                                            border: 2px solid white; transform: translate(-50%); left: 50%; position: absolute;">
                  <ul>
                      <!--       LOGO TAB MOBILE               -->
                    <li style="background-color: #ffffff; height: 50px;width: 50px; position: absolute; margin-right: 150px; top: -26px; z-index: 9; border-radius: 50%;
                          transform: translate(-50%);left: 50%;"> 
                      <a href="<?php bloginfo('url'); ?>"><img style="width: 107%!important;
                          position: relative; right: 1px; bottom: 4px;" src="<?php bloginfo('stylesheet_directory'); ?>/img/SO-LUNCH-EMBLEME-01.png" class="logo"></a></li>
                                        <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g0"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(12);?></a></li>
                                                            <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g1"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(3);?></a></li>
                                                            <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g2"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(1);?></a></li>
                                                            <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g3"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(8);?></a></li>
                                                            <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g4"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(9);?></a></li>
                                                            <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g5"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(10);?></a></li>
                                                            <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g6"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(11);?></a></li>
                  </ul>
                <div>    

            </div>     
          </div>

          <div class="row first-tab hide-on-large-only">
              <li class="tab col  l2"><a class="active" href="#g0">hdh</a></li>
              <li class="tab col  l2"><a href="#g1">hdh</a></li>
              <li class="tab col  l2"><a href="#g2">Test 2</a></li>
              <li class="tab col l2"><a href="#g3">Test3</a></li>
              <li class="tab col l2"><a href="#g4">Test 4</a></li>
              <li class="tab col  l2"><a href="#g5">Test5</a></li>
              <li class="tab col l2"><a href="#g6">Test 6</a></li>
          </div>    
      </ul>           
    </div>
          
<!--           <div class="globaleinsncription" style=" 
   height: 42px;
    position: absolute;
    width: 179px;
    bottom: 669px;">     
            <div style="background-color: white;
    height: 45px;
    position: relative;
    top: 51px;
    border: 4px solid #abd3a6;
    left: 19px;
                        
                        border-radius: 45px;"><a class="snipcart-user-profile" style="
    width: 100%;
    display: block;
    text-align: center;
    position: relative;
    top: 7px;"><span class="snipcart-user-email">Login</span></a></div>
  <a class="btn-floating btn-large waves-light red" style="background-color: #abd3a6!important;"><i class="material-icons">add</i></a>
       <a class="btn-floating btn-large waves-light red " style="background-color: #abd3a6!important; position: absolute;
    right: -42px;"><i class="material-icons snipcart-user-email">add</i></a>   
          </div> 
 -->

          <div class="snipcart-summary" id="totalprice" style="position: absolute; transform: translate(-50%); left: 50%; font-weight: 600; top: 265px; color: black;
                                       border-radius: 50px; background-color: white; z-index: 9; padding: 14px;">
  
            Prix Total: <span class="snipcart-total-price"></span>
         </div>
    <div class="first-tab2" style="position: relative; border: 2px solid white; top: 292px;">
      <div id="g0" class="col s12">
         <?php
               // <!-- debut loop base -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 12,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                         <!-- debut card -->
                          <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                        height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                     </div> 
                                 </div>                                   
                                      <div class="row" style="height:45px; position: relative; top: 12px;">
                                            <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                        <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                            <a href="" data-item-custom1-name="Jours (Fermé le Dimanche et jours fériés)"
  data-item-custom1-options="<?php echo $aujourdhui ?>| <?php echo $demain ?>| <?php echo $jour2 ?>| <?php echo $jour3 ?>|<?php echo $jour4 ?>| <?php echo $jour5 ?>| <?php echo $jour6 ?>" 
  data-item-custom2-name="Horaires"
  data-item-custom2-options="12:30 - 12:45| 12:45 - 13:00| 13:00 - 13:15| 13:15 - 13:30 |13:30 - 13:45 |13:45 - 14:00|14:15 - 14:30|14:30 - 14:45|14:45 - 15:00|15:00 - 15:15|15:15 - 15:30|15:30 - 15:45|18:00 - 18:15|18:15 - 18:30|18:30 - 18:45|18:45 - 19:00|19:00 - 19:15" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                               data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                        </div> 
                                        <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                            <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                        </div>
                                      </div>
                          </div>   
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->  
      </div>

      <div id="g1" class="col s12">
         <?php
   // <!-- debut loop veggies -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 3,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                         <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                        height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                     </div> 
                                 </div>                                   
                                      <div class="row" style="height:45px; position: relative; top: 12px;">
                                            <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                        <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                            <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                               data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                        </div> 
                                        <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                            <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                        </div>
                                      </div>
                          </div>  
                          <!-- fin Card -->
                        <?php endwhile;?>  
                      <!-- debut loop -->  
      </div>

      <div id="g2" class="col s12">
        <div class="row">
         <!-- debut loop proteine -->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 1,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                        height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                     </div> 
                                 </div>                                   
                                      <div class="row" style="height:45px; position: relative; top: 12px;">
                                            <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                        <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                            <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                               data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                        </div> 
                                        <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                            <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                        </div>
                                      </div>
                          </div>  
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>        
      </div>

      <div id="g3" class="col s12">
        <div class="row">
          <!-- debut loop grainesetnoix-->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 8,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                          <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                        height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                     </div> 
                                 </div>                                   
                                      <div class="row" style="height:45px; position: relative; top: 12px;">
                                            <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                        <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                            <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                               data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                        </div> 
                                        <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                            <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                        </div>
                                      </div>
                          </div>     
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->        
        </div>
      </div>  


      <div id="g4" class="col s12">
        <div class="row">
           <!-- debut loop les plus -->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 9,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                        height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                     </div> 
                                 </div>                                   
                                      <div class="row" style="height:45px; position: relative; top: 12px;">
                                            <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                        <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                            <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                               data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                        </div> 
                                        <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                            <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                        </div>
                                      </div>
                          </div>     
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>        
      </div>


      <div id="g5" class="col s12">
        <div class="row">
          <?php

   // <!-- debut loop a. et boissons-smoothies-->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 10,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                          <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                        height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                     </div> 
                                 </div>                                   
                                      <div class="row" style="height:45px; position: relative; top: 12px;">
                                            <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                        <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                            <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                               data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                        </div> 
                                        <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                            <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                        </div>
                                      </div>
                          </div>    
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->

        </div>   
      </div>

      <div id="g6" class="col s12">  
        <div class="row">
         <?php

   // <!-- debut loop Dessert -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 11,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                         <div class="col s12 m6 l2 <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;padding-top: 50px; padding-bottom: 25px; border-bottom: 2px dotted #fff; border-right: 2px dotted #fff;">
                                <div style="padding-left: 12px; background-color: ; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class=" circle-photo">
                                     <div data-position="top" data-delay="50" data-tooltip='<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_title' ); ?>' class="tooltipped circle-cat"  class=" z-depth-3" style="  border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;"><img style="width: 100px;
                                        height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
                                     </div> 
                                 </div>                                   
                                      <div class="row" style="height:45px; position: relative; top: 12px;">
                                            <div style="background-color:#ffffff; width: 45px; margin-right: auto; padding: 1px; border-radius: 29px; margin-left: auto; border: 2px solid white; position: relative; top: 16px;"><p style=" font-weight: 600; text-align: center; position: relative; bottom: 5px;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</p></div>

                                        <div class="col s6 m6 l6 " style="border: 2px solid white; background-color: #abd3a6; border-radius: 14px; ">
                                            <a href="" class="snipcart-add-item" data-item-id="<?php the_ID();?>" data-item-url="<?php bloginfo('url'); ?>/commander-en-ligne/" data-item-description="<?php the_excerpt(); ?>" 
                                               data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" data-item-name="<?php the_title();?>" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px; margin-right: -6px;">favorite</i></a>
                                        </div> 
                                        <div class="col s6 m6 l6 " style="border: 2px solid white; border-radius: 14px; ">
                                            <a href="#" class="snipcart-checkout" style="margin-right: auto; margin-left: auto; display: block;">
                                              <i class="large material-icons" style="font-size: 2rem!important; padding: 6px;">clear</i> </a>
                                        </div>
                                      </div>
                          </div>    
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>   
      </div>
    </div>  
  </div>

</form>          

      <style> 
        
      
        /* ecriture bas supprimer  */
        .snip-layout .snip-actions__link, .snip-layout .snip-footer__highlight {
          color: rgba(226, 226, 226, 0);
        } 
        /* ecriture bas supprimer  */
        .snip-layout .snip-footer__copyright{
          color:rgba(204, 187, 187, 0);
        } 
        
       input#snip-number, #snip-cvc, #snip-ownerName, #snip-type, #snip-expirationMonth, #snip-expirationYear {
          visibility: hidden;
        }
        
         .snip-form__container.snip-form__container-input {
          visibility: hidden;
        } 
        
     
        
      .cadre-ingredient{
        background-color: red; height: 96px; width: 197px; margin-right: auto;
                              margin-left: auto;margin-top: 55px; border-bottom: 2px solid black;
      }
      
      .text-ingredient{
            position: !important;
    top: 74px!important;
    text-align: center!important; 
      }
      
      .circle-ingredient{
             background-color: white!important; padding: 25px!important;
                          border-radius: 50%!important; width: 66px!important; height: 66px!important; position: absolute!important; transform: translate(-50%)!important;left: 50%!important;
      }     
      
  #modal11 {
    background-color:#ff000000;
    -webkit-box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0), 0 3px 14px 2px rgba(0, 0, 0, 0), 0 5px 5px -3px rgba(0, 0, 0, 0);
    box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0), 0 3px 14px 2px rgba(0, 0, 0, 0), 0 5px 5px -3px rgba(0, 0, 0, 0);
}
      
      .pindicator {
  display: flex;
  margin: 2rem auto 0;
  width: 47rem;
}
.pindicator .bullet {
  flex: 1;
  position: relative;
  text-align: center;
  transform-style: preserve-3d;
}
.pindicator .bullet::before,
.pindicator .bullet::after {
  content: '';
  display: block;
  position: absolute;
  height: .5rem;
  top: 1.25rem;
  transform: translate3d(0,0,-1px);
}
.pindicator .bullet::before {
  background-color: lightgray;
  width: 100%;
}
.pindicator .bullet::after {
  background-color: #abd3a6;
  transition: opacity .25s ease-out;
  opacity: 0;
  width: 100%;
}
.pindicator .bullet:first-child::before,
.pindicator .bullet:first-child::after {
  left: 50%;
  width: 50%;
}
.pindicator .bullet:last-child::before,
.pindicator .bullet:last-child::after {
  width: 50%;
}
.pindicator .icon {
  background-color: lightgray;
  border-radius: 100%;
  color: transparent;
  cursor: pointer;
  font-size: 1.5rem;
  display: inline-block;
  height: 2em;
  line-height: 2;
  text-align: center;
  transition: background-color .25s ease-out;
  width: 2em;
}
.pindicator .text {
  color: lightgray;
  font-size: .75rem;
  margin-top: 1rem;
  text-transform: uppercase;
  transition: background-color .25s ease-out;
}
.pindicator .past .icon,
.pindicator .current .icon {
  background-color: #abd3a6;
  color: white;
}
.pindicator .past::after,  
.pindicator .current::after {
  opacity: 1;
}
.pindicator .past .text,
.pindicator .current .text,
.pindicator .next .text,{
  color: #abd3a6;
}
.switch label input[type=checkbox]:checked+.lever:after {
    background-color: #abd3a6!important;
}  
      .switch label input[type=checkbox]:checked+.lever {
    background-color: #ffffff!important;
        }
      
.circle-photo   {
  margin-left: 9px;
}
     
.modale{
  background-color: ;
  border-radius: 45px;
  width: 708px;
  height: 100%;
}
 
      
 @media screen and (max-width: 600px) {
  .modale{
    width: 100%!important;
}
}       
.button-collapse{
      margin-left: auto;
    margin-right: auto;
    display: block;
    width: 150px;
    position: relative;
    top: 246px;
    z-index: 99;
}
.side-nav .user-view .circle, .side-nav .userView .circle {
    height: 150px;
    width: 150px;
}
.globale-title1{
  position: relative;
  top: 135px;
}
.picker--opened .picker__holder{
      background: rgba(0, 0, 0, 0);
}
.picker__holder {
    width: 100%;
    overflow-y: visible;
    }
    .picker__wrap {
    position: relative;
    bottom: -90px;
}    
      @media screen and (max-width: 706px) {
  .pindicator .bullet::after {
    background-color: #abd3a6;
    transition: opacity .25s ease-out;
    opacity: 0;
    width: 100%;
    
}
}
      
      @media screen and (max-width: 992px) {
        
        .globaleinsncription{
          top: -216px!important;
        }
        
        #totalprice{
              position: relative!important;
              top: 587px!important;
          text-align: center!important;
              width: 125px;
        }
  .global-tab{
    position: relative!important;
    margin-top: 45px!important;
}
        .pindicator{
          display: none!important;
        }
        #diet{
              position: absolute!important;
    transform: translate(-50%)!important;
    left: 77%!important;
    top: 58px!important;
        }
        
        .pindicator .bullet::after {
    display: none!important;
 }
        
        .pindicator .bullet::before {
    display: none!important;
}
        
  .globale-snipped-price {
    top: 690px!important;
    margin-left:auto!important;
    margin-right:auto!important;
        width: 53%!important;
}
  
.global-tab-mobile {
      position: relative;
    bottom: 222px;
}
.tabs{
  height: 300px!important;
  top: -90px!important;
  z-index: 10!important;
}
        
        
.dropdown {
  margin-right: auto;
  transform: translate(-50%); left: 50%; position: absolute;
  z-index: 999;
}
.dd-menu {
  z-index: 999!important;
}
.first-tab{
  display: none!important;
}
.first-tab2{
  position: relative!important;
    top:559px!important;
}
.form-input{
  width: 100%!important;
}
#dropdown-button{
  position: relative!important;
  top: 0px!important;
}
}
input[type=email]:not(.browser-default) {
    border-bottom: 1px solid #9e9e9e!important;
}
      /*  -----modeal----*/
.modalDialog {
    background: rgba(0, 0, 0, 0)!important;
}
.input-field label {
    color: #000000;
}
.tabs {
    background-color: rgba(255, 255, 255, 0);
}
.side-nav {
  background-color:#73a1a9;
}
.modalDialog > div {
    background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
    background: -o-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
    background: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
    background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.35) 25%, rgba(255, 255, 255, 0.35) 63%)!important;
}
@media screen and (max-width: 992px) {
  .global-tab2{
  width: 250px!important;
  padding-left: 35px!important;
  top: 190px!important;
}
 
  
.first-tab2 {
    position: relative!important;
    top: 550px!important;
}
  
  .dropdown-content select-dropdown{
        top: 59px!important;
  }
 
.tab{
height: 600px!important;
}                                                       
                                                        
#tab2{
    height: 585px!important;
    top: 66px!important;
    padding-top: 133px!important;
}
}
@media screen and (max-width: 400px) {
  h4 {
    font-size: 1.8em!important;
  }
  
  .circle-cat{
    height: 77px!important;
    width: 77px!important;
  }
  .reservation{
    width: 121px!important;
  }
}
.globale-title1{
   position: relative;
   top:  198px;
}
}
    </style>

 <?php
get_template_part( 'footer-for-page' );?>

     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
        $(document).ready(function(){
           $(".button-collapse").sideNav();
             $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
              });
              $('.timepicker').pickatime({
                default: 'now', // Set default time: 'now', '1:30AM', '16:30'
                fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
                twelvehour: false, // Use AM/PM or 24-hour format
                donetext: 'OK', // text for done-button
                cleartext: 'Clear', // text for clear-button
                canceltext: 'Cancel', // Text for cancel-button
                autoclose: false, // automatic close timepicker
                ampmclickable: true, // make AM PM clickable
                aftershow: function(){} //Function for after opening timepicker
              });
        });
  
         $(document).ready(function() {
           $('select').material_select();
         });
</script>
      
      

<script>
  $(document).ready(function(){
    $('#modal11').modal();
    $('#modal10').modal();
    $('#modal12').modal();
  });
  console.clear();
(function() {
  "use strict";
  var bulletClasses = {
    elements: {
      container: ".pindicator",
      bullet: ".bullet",
    },
    helpers: {
      past: "past",
      current: "current",
      next: "next",
      future: "future",
    }
  };
  
  var bulletEls;
  document.addEventListener("DOMContentLoaded", initBullets);
  function initBullets() {
    bulletEls = Array.prototype.slice.call(
      document.body.querySelectorAll(bulletClasses.elements.bullet)
    );
    bulletEls.forEach(function(el) {
      el.addEventListener("mousedown", function(event) {
        gotoPage(bulletEls.indexOf(this) + 1);
      });
      el.addEventListener("touchstart", function(event) {
        event.preventDefault();
        gotoPage(bulletEls.indexOf(this) + 1);
      });
    });
  }
  function gotoPage(pageNum) {
    bulletEls.forEach(function(e) {
      e.classList.remove.apply(e.classList,
        Object.keys(bulletClasses.helpers).map(function(e){
          return bulletClasses.helpers[e];
        })
      )
    });
    bulletEls[pageNum - 1].classList.add(bulletClasses.helpers.current);
    if(pageNum > 1) {
      for(var i = 0; i < pageNum; i++) {
        bulletEls[i].classList.add(bulletClasses.helpers.past);
      }
    }
    if(pageNum < bulletEls.length) {
      bulletEls[pageNum].classList.add(bulletClasses.helpers.next);
      for(var i = bulletEls.length - 1; i >= pageNum; i--) {
        bulletEls[i].classList.add(bulletClasses.helpers.future);
      }
    }
  }
})();
</script>
        
     
<script>         
function toggleByClass(className) {
     $("."+className).toggle();
}
</script>