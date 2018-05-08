<?php
/*
Template Name: Contact
*/

 get_header(); ?>

  <?php wp_head(); ?>

<body <?php body_class(); ?>  style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/background-1.png); background-repeat: no-repeat; background-position:center center; background-size: cover; height: 100vh;">

   <!-- Partie form contact -->
      <div class="globale-contact z-depth-4" style="background-color: rgba(247, 237, 237, 0.58); height: 88vh; position: relative; margin-left: auto; margin-right: auto; top: 62px;">
          <div>
             <h4 class="tittle-contact"  name="From So Lunch page Contact"  style="color: #fff; margin-top: 56px; transform: translate(-50%)!important; left: 50%!important; position: absolute!important; font-family: 'Muli', sans-serif;">Contactez-nous</h4>
          </div>   

          <div class="row globale-form" style="width: 100%; ">
            <form class="col s12" action="https://formspree.io/usa.pascal@yahoo.fr" method="POST">
              <div class="row" style="position: relative; top: 62px;">
              <input type="hidden" name="From So Lunch page Contact"/>
                <div class="input-field col s12 l12 ">
                  <i class="material-icons prefix" style="color: white;">send</i>
                  <input id="icon_telephone" type="text" name="Sujet" class="validate" style="border-bottom: 2px solid white;">
                  <label for="icon_telephone" style="color: white; font-family: 'Josefin Sans', sans-serif;">Sujet</label>
                </div>
                <div class="input-field col s12 l6">
                  <i class="material-icons prefix" style="color: white;">email</i>
                  <input id="icon_telephone" type="email" name="email" class="validate" style="border-bottom: 2px solid white;">
                  <label for="icon_telephone" style="color: white; font-family: 'Josefin Sans', sans-serif;" >E-mail</label>
                </div>
                <div class="input-field col s12  l6">
                  <i class="material-icons prefix" style="color: white;">account_circle</i>
                  <input id="icon_prefix" type="text" name="name" class="validate" style="border-bottom: 2px solid white;">
                  <label for="icon_prefix" style="color: white; font-family: 'Josefin Sans', sans-serif;">Nom Prénom</label>
                </div>
                <div class="input-field col s12 l12 ">
                  <i class="material-icons prefix" style="color: white;">mode_edit</i>
                  <textarea id="icon_prefix2" name="message" class="materialize-textarea" style="border-bottom: 2px solid white;"></textarea>
                  <label for="icon_telephone" style="color: white; font-family: 'Josefin Sans', sans-serif;">Message</label>
                </div>
                 <div class="input-field col s12 l12 " style="position: relative; bottom: 15px; margin-bottom: 45px;">
                  <button class="btn waves-effect waves-light pulse " type="submit" style="margin-right:auto;margin-left: auto; display: -webkit-box; display: inherit; background-color: #abd3a7!important; font-family: 'Josefin Sans', sans-serif; padding-top: 3px">Envoyer
                  <!-- Page reirection thank -->
                  <input type="hidden" name="_next" value="https://codepen.io/tmd-uk/pen/GgVWGG" />
                  <!-- Multiple email -->
                  <input type="hidden" name="_cc" value="usa.pascal@yahoo.fr,pascal.webdesigner@gmail.com" />
                  <!-- Capcha -->
                  <input type="hidden" name="_language" value="fr" />
                  </button>
                </div> 
              </div>
            </form>
         </div> 
        
            <div class="row " style=" position: relative; top:-4px; margin-bottom: 45px;">
                <div class="col s12 l6">
                    <div class=" other-contact" style=" font-size: 15px;width: 240px; margin-left: auto; margin-right: auto; margin-bottom: 19px; color: #fff; font-family: 'Josefin Sans', sans-serif;">
                      Téléphone : <?php echo info_page_contacte_get_meta( 'info_page_contacte_numero_de_l_entreprise' );?> <span style=" color: #fff; position: relative;float: left;margin-right: 15px;border: 2px solid; border-radius: 50%;height: 30px;width: 30px;"><i class="material-icons prefix" style="position: relative;top: 1px;left: 1px;">phone</i></span>
                    </div> 
                </div>

                <div class="col s12 l6 ">
                   <div class=" other-contact" style="  font-size: 15px;  width: 240px; margin-left: auto; margin-right: auto; color: #fff; font-family: 'Josefin Sans', sans-serif;">Email : <?php echo info_page_contacte_get_meta( 'info_page_contacte_e_mail' ) ;?> <span style=" color: #fff; position: relative;float: left;margin-right: 15px;border: 2px solid ;border-radius: 50%;height: 30px;width: 30px;"><i class="material-icons prefix" style="position: relative;top: 1px;left: 1px;">email</i> </span>
                   </div>
                </div>
                     
              </div>  
            </div>
    </div>

</section>
 <?php
get_template_part( 'footer2' );?>


  <style>
    
    .globale-contact{
      width:50%;
    }
  @media screen and (max-width: 995px) {
  .globale-form {
    width: 100%!important;
}
     @media screen and (max-width: 1024px) {
    .globale-contact {
      width:70%!important;
       }
    }
       
      @media screen and (max-width: 480px) {
  .tittle-contact {
    font-size:1.4em!important;
}
        
@media screen and (max-width: 1015px) {
  .globale-contact {
    width: 100%!important;
}
}

}
  
    </style>
    <script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
   </script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
  </html>