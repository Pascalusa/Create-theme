<?php 
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$jour = $_POST['jour'];
$heures = $_POST['heures'];
$lieux = $_POST['lieux'];
$lunch_bowl = $_POST["lunch-bowl"];
$lunch_bowl2 = implode('+', $lunch_bowl);
$lunch_boissons = $_POST['lunch-boisson'];
$lunch_boissons2 =  implode('+', $lunch_boissons);
// Ordre table = id + first_name + email + heures + lieux + lunch_bowl + lunch_boissons
// $conn = new mysqli('sql100.byetcluster.com', '21106287_1', '1V]7Sp1)N2', 'epiz_21106287_w111');

// ************************************************************************ LUNCH BOWL ************************************************************************
          if (isset($_POST['submit'])) {

                if (!empty ($_POST["lunch-bowl"]))
                {
                      echo 'selectionne un langage';
                      foreach ($_POST["lunch-bowl"] as $lunch_bowl) 
                       { 
                          echo '<p>'.$lunch_bowl.'</p> <br>';
                       }
                }
                 else{
                   echo 'probleme';
                 }
            }
// ************************************************************************ LUNCH + BOISSONS ************************************************************************
           if (isset($_POST['submit'])) {

                if (!empty ($_POST["lunch-boisson"]))
                {
                      echo 'selectionne un langage';
                      foreach ($_POST["lunch-boisson"] as $lunch_boissons) 
                       { 
                          echo '<p>'.$lunch_boissons.'</p> <br>';
                       }
                }
                 else{
                   echo 'probleme';
                 }
            } 
// ************************************************************************ BDD ************************************************************************
$conn = new mysqli('localhost', 'wordpressuser', '', 'WordPress');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO client (first_name, email, jour, heures, lieux, lunch_bowl, lunch_boissons)
VALUES ('$first_name', '$email', '$jour', '$heures', '$lieux', '$lunch_bowl2','$lunch_boissons2')";

if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<div class="globale-title1" style=" top: 120px; position: relative;  ">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/hot-soup-bowl2.png" style="width: 85px;
       
    position: absolute;
    top: -46px;
    transform: translate(-50%);
    left: 50%;"> 
</div>    

<form style="position: relative;top: 44px;" action="" method="POST" >
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
                          
                          <input  id="first_name" type="text" name="first_name" class="validate" style="border-bottom: 2px solid #000!important;">
                          <label for="first_name">Nom</label>
                         
                        </div>
                        <div class=" input-field col s12">
                          <input id="email"  type="email" name="email" class="validate" style="border-bottom: 2px solid #000!important;">
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
                            <select id="heures" name="heures">
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
                              <select id="lieux" name="lieux">
                                <option value="So Lunch Clémenceau">So Lunch Clémenceau</option>
                              </select>
                              <label>-- Point d'enlèvement --</label>
                            </div>
                        </div>
    
                            
                      </div>
                      <!-- buton valider -->
                       <div class="col s12 l12 " style="top: 130px; position: relative;">
                         <input style="border: 2px solid; font-weight: 800!important; margin-left: auto; display: block; background-color: #7bb6a4;
                         margin-right: auto;" type="submit" class="btn" name="submit" value="Valider" target="_blank" style="font-family: 'Josefin Sans', sans-serif; transform: translate(-50%); left: 50%;  position: absolute;">
                      </div>
                </div>
              </div> 
              <!-- fin modale -->
              <div>

                  <div class="row" style="width: 300px; position: relative; z-index: 20; top: 137px;">
                    <div class="col s12 l6">
                      
                    <a class="reservation  modal-trigger " href="#modal10" style="top: 150px; padding: 7px 25px; border: 2px solid; background-color: #ffffff54!important; font-weight: 800!important; margin-right: auto; margin-left: auto; display: block;">RÉSERVER</a> 

                    </div>
                    <div class="col s12 l6" id="diet">  

                         <a data-position="bottom" data-delay="50" data-tooltip='Indiquez vos restrictions alimentaires'  class="waves-effect modal-trigger tooltipped" href="#modal11" style="    background-color: rgba(171, 211, 166, 0); padding: 7px 42px;z-index: 29;
                         border: 2px solid white; color: #fff;">DIET</a>

                   </div>  
										
										<a class="hide-on-large-only waves-effect modal-trigger " href="#modal12"  style="    background-color: rgba(171, 211, 166, 0); padding: 7px 42px;z-index: 29;
                         border: 2px solid white; color: #fff; position: absolute; transform: translate(-50%); left: 50%; top: 111px;">Shopping Cart</a>
										
                          <div id="modal12" class="modal modal-trigger animated tdPlopIn open" style="background-color:red;">
                            <!-- fermeture modale -->
                <a class="modal-action modal-close" style="position: absolute; right: 0px;top: 3%; margin-right: 32px; z-index: 99;"><span style="font-size: 1.5em; color:#fff;">X</span></a>
														<h5 style="text-align: center; background-color: #abd3a6; padding: 73px; position: relative; top: -12px; color: white;">Shopping Cart</h5>
                            
                           <span class="total-cart" id="total-cart2" style="position: relative; top: -39px; margin-right: auto; background-color: #abd3a6; text-align: center; margin-left: auto; display: block; width: 115px; padding: 8px;border-radius: 19px;"></span>
                             <ul class="show-cart" style="margin-bottom:45px">
                                  <li class="btn-floating btn-large waves-effect waves-light red">???????</li>
                             </ul>
                            
										      </div>                   

                    </div>
                  </div>
                    
      <div class="row global-tab" style="position: relative; top: 55px;">
             
    <div class="global-tab-mobile" style="position: relative; bottom: 202px;">

      <ul class="tabs " id="tab2" style="overflow: hidden; height: 265px; transform: translate(-50%)!important; left: 50%!important; position: absolute!important; width: 100%;">
                       
				                <div class="row">
													   
													                           <div class="globale-cat" style="width: 132px; margin-right: auto; margin-left: auto; top: -2px; position: relative;">
																											  <div class="switch" >
																													<p style="transform: translate(-50%); left: 50%; position: absolute; font-weight: 550; font-size: 14px;"> JE COMPOSE MON LUNCH BOWL</p>
																													<label style="top: 39px; color: #ffffff; position: relative; right: -14px;">
                                                           Off
																														<input type="checkbox" onclick="showprice('menu-btn');">
																														<span class="lever"></span>
                                                            On
																													</label>
																												</div>
																											 <div class="switch">
																													<p style="transform: translate(-50%); left: 50%; position: absolute; top: 62px; font-weight: 550; font-size: 14px;">LUNCH BOWL + Boisson</p>
																													<label style="top: 82px; color: #ffffff; position: relative; right: -14px;">
                                                            Off
																														<input href="#g1" type="checkbox" class=""  onclick="showprice('lb');" >
																														<span class="lever"></span>
                                                             On
																													</label>
																												</div>
													                           </div>

                            <!--   TAB computer    -->
                          <div class="col s12 m12 l12 menu-btn" style="display:none;" >
														<div class="pindicator" style="position: relative; top: 94px;"> 
															<div class="bullet past">
															<a href="#g0" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(12);?>' class="tooltipped"><span class="icon z-depth-3">1</span></a>
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
																<a href="#g5" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(29);?>' class="tooltipped"><span class="icon z-depth-3">6</span></a>
															</div>
															 <div class="bullet future">
																<a href="#g6" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(11);?>' class="tooltipped"><span class="icon z-depth-3">7</span></a>
															</div>     
															 <div class="bullet future">
																<a href="#g7" data-position="top" data-delay="50" data-tooltip='<?php  echo get_cat_name(10);?>' class="tooltipped"><span class="icon z-depth-3">8</span></a>
															</div>                         
														</div>
													</div>	
												</div>
      

        <div class="row " style="width: 100%; height: 400px!important;">
              <div class=" col s12 m12 l10" style="transform: translate(-50%)!important; left: 50%!important; position: absolute!important;">
                <div class="global-tab2" style="transform: translate(-50%)!important;
                                              left: 50%!important;
                                              position: absolute!important;
                                              width: 787px;
                                              padding-left: 45px;">
  
                  
                  <!--  MOBILE tab  --> 
                <div class="z-depth-3 hide-on-large-only menu-btn" style="display:none; width: 232px; height: 282px; padding-top: 26px; border-radius: 20px;
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
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(29);?></a></li>
                                                            <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g6"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(11);?></a></li>
                           <li style="    margin-bottom: 5px;
                        font-size: 1.2em;
                        font-weight: 700;"><a href="#g7"><i class=" material-icons" style="font-size: 10px!important;
                                            margin-right: 4px;">keyboard_arrow_right</i><?php  echo get_cat_name(10);?></a></li>
                    
                  </ul>
                <div>    

            </div>     
          </div>

          <div class="row first-tab hide-on-large-only">
              <li class="tab col  l2"><a class="active" href="#g0"></a></li>
              <li class="tab col  l2"><a href="#g1"></a></li>
              <li class="tab col  l2"><a href="#g2">Test 2</a></li>
              <li class="tab col l2"><a href="#g3">Test3</a></li>
              <li class="tab col l2"><a href="#g4">Test 4</a></li>
              <li class="tab col  l2"><a href="#g5">Test5</a></li>
              <li class="tab col l2"><a href="#g6">Test 6</a></li>
              <li class="tab col l2"><a href="#g7">Test 6</a></li>
          </div>    
      </ul>           
    </div>
          
					<div class="lb" id="bowl" style="display:none;">
					    <h6 style="text-align: center; border: 2px solid white; background-color: white; border-radius: 11px; padding: 12px; 
                         position: absolute; top: 249px; transform: translate(-50%); left: 50%; z-index: 1; font-family: 'Muli', sans-serif;">LUNCH BOWL + Boisson</h6>
					</div>
					<!-- titre bowl menu -->
					<div class="menu-btn" id="menu-btn" style="display:none;">
					    <h6 style="text-align: center; border: 2px solid white; background-color: white; border-radius: 11px; padding: 12px;
                         position: absolute; top: 367px; transform: translate(-50%); left: 50%; z-index: 1; font-family: 'Muli', sans-serif;">JE COMPOSE MON LUNCH BOWL</h6>
					</div>
            

          <div class="z-depth-3 hide-on-med-and-down" id="shopping-cart" style="right: 0; margin-left: 45px;top: 20px; background-color: white; position: absolute;width: 260px; border-radius: 17px;z-index: 999;">
						 <i  onclick="showprice('article');" class="material-icons" style= "font-size: 30px!important; color: #fff!important; position: absolute; z-index: 9; width: 4px; top: 20px; left: 23px;">keyboard_arrow_up</i>
						 <i onclick="showprice('article');" class="material-icons" style= "top: 20px; font-size: 30px!important; color: #fff!important; position: absolute; z-index: 9; right: 0; right:23px;">keyboard_arrow_down</i>
                <div  style="background-color: #abd3a7; padding: 15px 0px 15px; position: relative; bottom: 12px; border-top-right-radius: 17px; border-top-left-radius: 17px; color: white;"> 
                  <p style="width: 123px; margin-right: auto; margin-left: auto; font-size: 19px;">Shopping Cart</p>
									<div class="menu-btn lb"  style="display:none; position: absolute; transform: translate(-50%); left: 50%; font-weight: 600; top: -13px; color: black;
                          border-radius: 50px; background-color: #abd3a6; z-index: 9; padding: 5px;">
  
           <span style="color: black!important; font-size: 1rem!important; margin-left: 7px; margin-right: 7px; position: relative; top: -4px;"></span><span class="total-cart" style="position: relative;top: -4px; margin-right: 5px;">
           </span></div>
                </div>

                <ul class="show-cart" style="margin-bottom:45px">
                    <li class="btn-floating btn-large waves-effect waves-light red">???????</li>
                </ul>
             <div  class="menu-btn" style="    padding: 2px; height: 45px; margin-bottom: 18px; display:none;">
                <a class="add-to-cart pulse z-depth-1"  onclick="showprice('save');" data-name="+ 9.90 (Choisissez 4  ingrédients au choix)" data-price="9.90" onclick="alertify.success('Votre Lunch Bowl a été ajouté avec succès')" id="valide9" style="    background-color: rgb(171, 211, 168);
                  color: rgb(255, 255, 255); border-radius: 50px; padding: 8px; cursor: pointer; z-index: 9; position: relative;  margin-left: auto; margin-right: auto; display: block; width: 102px;" >  
                  <i class="tiny material-icons" style="font-size: 1.2rem!important; margin-left: 7px; margin-right: 7px; position: relative; top: 3px; left: -4px; color:#ffffff;!important">check</i> <span style="position: relative; left: -9px;"> 9.90€ </span>
                </a> 
	           </div>
          </div>
          <a class=" menu-btn pulse btn-floating btn-large waves-effect clear-cart1 waves-light red" style=" position: absolute;
    background-color: white!important;
    left: 95px; top:375px; width: 45px;
    height: 45px; display:none;"><i id="clear-cart" onclick="myFunction()" style="font-size: 2.2rem!important;
    position: relative;
    top: -5px; color: black!important;" class="material-icons">refresh</i></a>

            <!-- 		carousselle			   -->
            <div class="lb" style=" position: relative; top: 279px; border-top: 4px solid white; display:none;">
                <?php get_template_part( 'lunch-boissons');?>
               <!-- div sur l'autre page ne pas enlever -->
            </div>
					
    <div  class="first-tab2 menu-btn" style=" display:none; position: relative; border: 2px solid white; top: 397px;">
      
<!-- 			---------------------------------------------------------12--------------------------------------------------------------------------------- -->
      <div id="g0" class="col s12" style=" position: relative; top: 40px;">
         <?php
               // <!-- debut loop base -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 12,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                         <!-- debut card -->
                          <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
																					<p class="pulse hide-on-med-and-up btn-floating clickadd<?php the_ID();?>" style=" display:none;   
                                              background-color: rgb(171, 211, 168); border-radius: 12px; width: 34px; height: 34px; position: relative;  top: -6px; left: 19px;">
																						<span style="position: relative; bottom: 3px; left: 12px;">+<span>
																					</p>
                                          <p class="pulse btn-floating hide-on-small-only clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox" name="lunch-bowl[]" value="<?php the_title();?>" onclick="return countClicks();" data-name="<?php the_title();?>">
                                      <span class="lever " onclick="showprice('clickadd<?php the_ID();?>');"></span>
                                      On 
                                    </label>
                                  </div>

                                      <div class="row" style=" height:45px; "></div>
                          </div> 
				                  <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- fin loop --> 
			</div>
			
<!-- 			-----------------------------------------------------------------------3------------------------------------------------------------------- -->
      <div id="g1" class="col s12">
    <!-- debut loop veggies -->
      <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 3,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox"  name="lunch-bowl[]" onclick="return countClicks();" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
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
                          <!-- fin Card -->
                        <?php endwhile;?>  
                      <!-- debut loop --> 				
      </div>
			
				
				<!-- 			-----------------------------------------------------------------------1------------------------------------------------------------------- -->
      <div id="g2" class="col s12">
        <div class="row">
         <!-- debut loop proteine -->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 1,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                           <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox" onclick="return countClicks();" name="lunch-bowl[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
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
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->      
      </div>
				
				<!-- 			-----------------------------------------------------------------------8------------------------------------------------------------------- -->

      <div id="g3" class="col s12">
        <div class="row">
          <!-- debut loop grainesetnoix-->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 8,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                           <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox" onclick="return countClicks();" name="lunch-bowl[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
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
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->   
      </div>  
				
<!-- 			-----------------------------------------------------------------------9------------------------------------------------------------------- -->

      <div id="g4" class="col s12">
        <div class="row">
           <!-- debut loop les plus -->
           <?php
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 9,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                           <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
                                           <p class="hide-on-med-and-up pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																					 <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">+</p>

																					 																					 <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">+</p>

																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox" onclick="return countClicks();" name="lunch-bowl[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
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
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->    
      </div>

				<!-- 			-----------------------------------------------------------------------10------------------------------------------------------------------- -->

      <div id="g5" class="col s12">
        <div class="row">
          <?php

   // <!-- debut loop a. et boissons-smoothies-->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 10,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                             <!-- debut card -->
                            <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox"  onclick="return countClicks();" name="lunch-bowl[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
                                      <span class="lever" onclick="showprice('clickadd<?php the_ID();?>');"></span>
                                      On 
                                    </label>
                                  </div>
                                      
                                                   
<!--                              <script>
                             
                            $(document).ready(function (){
                              $('.switch').click( function () {
                                 $('#date').addClass('add-to-cart btn');    margin-left: 45px;
                   
                              });
                           
                            });                 
                            </script> -->
				
<!-- 																				<div class="switch">
																					<label>
																						Off
																						<input class="add-to-cart" type="checkbox" name="lunch-bowl" id="lunch-bowl" value="<?php the_title();?>" data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
																						<span class="lever"></span>
																						On
																					</label>	
																				</div> -->
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
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop --> 
      </div>
				
<!-- 			-----------------------------------------------------------------------11------------------------------------------------------------------- -->

      <div id="g6" class="col s12">  
        <div class="row">
         <?php

   // <!-- debut loop Dessert -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 11,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                           <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox" onclick="return countClicks();" name="lunch-bowl[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
                                      <span class="lever" onclick="showprice('clickadd<?php the_ID();?>');"></span>
                                      On 
                                    </label>
                                  </div>
                                      
                                                   
<!--                              <script>
                             
                            $(document).ready(function (){
                              $('.switch').click( function () {
                                 $('#date').addClass('add-to-cart btn');
                   
                              });
                           
                            });                 
                            </script> -->
				
<!-- 																				<div class="switch">
																					<label>
																						Off
																						<input class="add-to-cart" type="checkbox" name="lunch-bowl" id="lunch-bowl" value="<?php the_title();?>" data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
																						<span class="lever"></span>
																						On
																					</label>	
																				</div> -->
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
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
      </div>
      
					<!-- 			-----------------------------------------------------------------------29------------------------------------------------------------------- -->
	
      <div id="g7" class="col s12">  
        <div class="row">
         <?php
       // <!-- debut loop Dessert -->
                       $args = array('post_per_page' => -1,
                         'post_type' => 'commande_en_lignes', 'cat' => 29,);
                        $category = new WP_Query($args);
                        while (  $category -> have_posts() ) : $category -> the_post(); ?>
                            <!-- debut card -->
                          <div class="col s12 m6 l2 menu-btn <?php echo restriction_get_meta( 'restriction_soja' );?> <?php echo restriction_get_meta( 'restriction_gluten' );?> <?php echo restriction_get_meta( 'restriction_produits_laitiers' );?>
                                          <?php echo restriction_get_meta( 'restriction_poisson' );?> <?php echo restriction_get_meta( 'restriction_viande' );?>" style="background-color:;  display:none; padding-bottom: 25px;">
                               
														<div class="menu-btn " style="display:none; top: 153px; position: relative; margin-top: -38px;"> <p style="position: relative;top: 41px; text-align: center;"><?php the_title();?><br><span class="animateprice" style="text-align:center;"><?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>€</span></p> </div>

														<div style="padding-left: 12px; z-index:999; width: 117px; margin-left: auto; margin-right: auto;" class="circle-photo">
                                <!-- circle -->
                                  <div class="z-depth-2 circle-cat" style=" border: 4px solid white; background-color: green; height: 100px; width: 100px; border-radius: 50%; overflow:hidden;">
																		<img style="width: 100px; height: 100px;"<?php the_post_thumbnail('medium-thumbnails'); ?>>
																		  <div class="icon-circle menu-btn" style="display:none;">
																				 <a onclick="alertify.success('<?php the_title();?> a été ajouté avec succès')"  data-name="<?php the_title();?>" data-price="0" class=" add-to-cart bowl">
                                           <p class="pulse btn-floating clickadd<?php the_ID();?>" style=" display:none; text-align: center; background-color: #abd3a8; border-radius: 12px; width: 70px;">Ajouter</p>
																				 </a>
																			</div>	
                                     </div>    
                                  </div> 
                                <!-- circle -->  
                                  <div class="switch" style=" width: 107px; margin-left: auto; margin-right: auto; margin-top: 15px;">
                                    <label style="color: white;">
                                      Off
                                      <input type="checkbox" onclick="return countClicks();" name="lunch-bowl[]" value="<?php the_title();?>"  data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
                                      <span class="lever" onclick="showprice('clickadd<?php the_ID();?>');"></span>
                                      On 
                                    </label>
                                  </div>
                                      
                                                   
<!--                              <script>
                             
                            $(document).ready(function (){
                              $('.switch').click( function () {
                                 $('#date').addClass('add-to-cart btn');
                   
                              });
                           
                            });                 
                            </script> -->
				
<!-- 																				<div class="switch">
																					<label>
																						Off
																						<input class="add-to-cart" type="checkbox" name="lunch-bowl" id="lunch-bowl" value="<?php the_title();?>" data-name="<?php the_title();?>" data-price="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
																						<span class="lever"></span>
																						On
																					</label>	
																				</div> -->
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
                          <!-- fin Card --> 
                        <?php endwhile;?>  
                      <!-- debut loop -->
        </div>  
      </div>
    </div>  
  </div>

</form>          

      <style> 
	
         .total-cart::after, #total-cart2::after {
             content: " € ";
        }  
    
        
				
.alertify-notifier.ajs-right .ajs-message.ajs-visible {
position: relative;
bottom: 590px;
}
				
  .icon-circle { 
	position: relative;
        bottom: 118px;
    font-weight: 700;
    width: 74px;
    margin-right: auto;
    margin-left: auto;
    
	  }
				
 	.item-count	{	display:none;
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
    position: relative;
    top: 103px;
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
		
@media screen and (max-width: 400px) {
   #menu-btn{
     position: relative!important;
     top: 45px!important;
   }
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
				
				#valide9{
					margin-right: auto!important;
					margin-left: auto!important;
				}
        
        .clear-cart1{
            top: 527px!important;
            left: 20px!important;
        }
				
				#shopping-cart{
					margin-right:auto!important;
					margin-left:auto!important;
				}
				
				.globale-cat {
					transform: translate(-50%)!important;
					left: 50%!important;
					position: absolute!important;
					top: -18px!important;
				}
				
				.globale-title1{
					display:none!important;
				}
				
				#menu-btn, #bowl{
					position:relative!important;
					top: 161px!important;
				}
        
        #totalprice{
          position: relative!important;
					top: 553px!important;
					text-align: center!important;
					width: 119px;
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
    height: 611px!important;
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
				
     <script src="<?php bloginfo('stylesheet_directory'); ?>/js/shoppingCart.js"></script>
     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
				<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

		hghghgh:		

<script type="text/javascript">
var ClickCount = 0;
function countClicks() {
  var clickLimit = 4; //Max number of clicks
  if(ClickCount>=clickLimit) {
    alert("Vous pouvez choisir que "+clickLimit+" ingrédients pour votre lunch bowl."); 
    
    return false;
  }
  else
  {
    ClickCount++;
    return true;
  }
}
</script> 

  <script>
function myFunction() {
    location.reload();
}
</script>    
        
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
				
       <!-- 	owl carousselle			 -->
				<script>					
					$('.owl-carousel').owlCarousel({
								loop:true,
								margin:10,
						    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
								nav:false,
								responsive:{
										0:{
												items:1
										},
										600:{
												items:3
										},
										1000:{
												items:5
										}
								}
					})
        </script>
				
				<script>

            $(".add-to-cart").click(function(event){
                event.preventDefault();
                var name = $(this).attr("data-name");
                var price = Number($(this).attr("data-price"));

                shoppingCart.addItemToCart(name, price, 1);
                displayCart();
            });

            $("#clear-cart").click(function(event){
                shoppingCart.clearCart();
                displayCart();
            });

            function displayCart() {
                var cartArray = shoppingCart.listCart();
                console.log(cartArray);
                var output = "";

                for (var i in cartArray) {
                    output += "<li class='article' style= 'width: 162px; margin-right: auto; margin-left: auto;'> <p style='text-align: center; width: 100px; margin-left: auto;margin-right: auto;'>"
                        +cartArray[i].name
                        +" <input class='item-count' type='number' data-name='"
                        +cartArray[i].name
                        +"' value='"+cartArray[i].count+"' > </p>"
//                         +" x "+cartArray[i].price
                        +"<div style='text-align: center;'>Prix : "+cartArray[i].total+"€</div>"
                        +"<div><button style='display:none; margin-right: 17px; width: 34px; height: 34px; background-color: #abd3a7!important;' class='plus-item btn-floating btn-large waves-effect waves-light cyan lighten-2' data-name='"
                        +cartArray[i].name+"'><span style='     position: relative; bottom: 12px;font-size: 2em;position: relative; bottom: 9px; font-size: 2em;'>+</span></button>"
                        +" <button style='display:none; margin-right: 17px; width: 34px; height: 34px;' class='subtract-item btn-floating btn-large waves-effect waves-light red' data-name='"
                        +cartArray[i].name+"'><span style='    position: relative; bottom: 12px; font-size: 2em;'>-</span></button>"
                        +" <button style='    display: block; margin-right: auto; margin-left: auto; width: 34px; height: 34px; background-color: #000000!important;' class='delete-item btn-floating btn-large waves-effect waves-light ' data-name='"
                        +cartArray[i].name+"'><span style='position: relative; bottom: 10px; font-size: 1.1em; left: 1px;'>X</span></button></div>"
                        +"</li>";
                }

                $(".show-cart").html(output);
                $("#count-cart").html( shoppingCart.countCart() );
                $(".total-cart").html( shoppingCart.totalCart() );
            }

            $(".show-cart").on("click", ".delete-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCartAll(name);
                displayCart();
            });

            $(".show-cart").on("click", ".subtract-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCart(name);
                displayCart();
            });

            $(".show-cart").on("click", ".plus-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.addItemToCart(name, 0, 1);
                displayCart();
            });

            $(".show-cart").on("change", ".item-count", function(event){
                var name = $(this).attr("data-name");
                var count = Number($(this).val());
                shoppingCart.setCountForItem(name, count);
                displayCart();
            });


            displayCart();

        </script>
      
      <script>
        function showprice(className) {
           $("."+className).toggle();
        }
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
              
    