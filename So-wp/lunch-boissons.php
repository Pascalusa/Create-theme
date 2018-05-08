


<h5 style="text-align: center;position: relative; top: 51px; border-radius: 15px; z-index: 7; background-color: white; width: 290px; padding: 9px; margin-left: auto;">Des ingrédients extra ?</h5>

<div class="owl-carousel owl-theme" style="margin-top: 30px; border: 2px dashed white; border-radius: 25px; padding-top: 26px;">

	  <?php
               // <!-- debut loop base -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 6,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
    <div class="item">
	
	       <div class="col s12 m12 l12 lb <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="lb " style="display:none; top: 153px; position: relative; margin-top: -38px;"><p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle lb" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox" name="lunch-boisson[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
                                      <span class="lever" onclick="showprice('clickadd<?php the_ID();?>');"></span>
                                      On 
                                    </label>
                                  </div>
          
                                  <!-- MOBILE -->
														      <div class="hide-on-large-only bowl menu-btn" style="display:none; position: relative; bottom: 60px; width: 192px; margin-right: auto; margin-left: auto;">
																		     <a style="display:none;" onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')" data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>"   class="add-to-cart menu-btn" href=""><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">add</i></a>
																		     <a href="" id="count-cart" class=" menu-btn" style="display:none; float: right;" ><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">close</i></a>
																		     <!--	 -->
																		     <a style="display:none;" onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  class="add-to-cart bowl" href=""><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">add</i></a>
																		     <a href="" id="clear-cart" class="  bowl" style="display:none; float: right;" ><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">close</i></a>
																	</div>
                            
                                      <div class="row" style="margin-bottom: 0px; height:45px; position: relative; top: 12px;"></div>
                          </div>
	
	  </div>
	
	  <!-- fin Card --> 
                        <!-- fin Card --> 
                        <?php endwhile;?>    
</div>

<!-- ************************************************************************************Partis 2************************************************************************************* -->


			<h5 style="text-align: center; position: relative; top: 41px; border-radius: 15px; z-index: 7; background-color: white; width: 290px; padding: 9px; margin-right: auto;">Votre boisson</h5>

<div class="owl-carousel owl-theme"  style="margin-top: 20px; border: 2px dashed white; border-radius:25px; padding-top: 19px;">

	  <?php
               // <!-- debut loop base -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 7,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
    <div class="item">
	
	       <div class="col s12 m12 l12 lb <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="lb " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle lb" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox"  name="lunch-boisson[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
                                      <span class="lever" onclick="showprice('clickadd<?php the_ID();?>');"></span>
                                      On 
                                    </label>
                                  </div>

                                  <!-- MOBILE -->
														      <div class="hide-on-large-only bowl menu-btn" style="display:none; position: relative; bottom: 60px; width: 192px; margin-right: auto; margin-left: auto;">
																		     <a style="display:none;" onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')" data-item-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>"   class="add-to-cart menu-btn" href=""><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">add</i></a>
																		     <a href="" id="count-cart" class=" menu-btn" style="display:none; float: right;" ><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">close</i></a>
																		     <!--	 -->
																		     <a style="display:none;" onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  class="add-to-cart bowl" href=""><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">add</i></a>
																		     <a href="" id="clear-cart" class="  bowl" style="display:none; float: right;" ><i style="font-size: 23px!important; color: black!important; background-color: #abd3a7; border-radius: 50%;" class="material-icons">close</i></a>
																	</div>
                            
                                      <div class="row" style="margin-bottom: 0px; height:45px; position: relative; top: 12px;"></div>
                          </div>
	  </div>
	
	  <!-- fin Card --> 
                        <!-- fin Card --> 
                        <?php endwhile;?>  
    
</div>

<style>
	 [aria-label="Previous"]{
    font-size: 54px;
    color: white;
	}
	
	.owl-prev{
		 float: left;
		margin-left: 47px!important;
	}
	
	[aria-label="Next"]{
		font-size: 54px;
    color: white;
	
	}
	
	.owl-next{
		float: right;
		margin-right: 47px!important;
	}
</style>
