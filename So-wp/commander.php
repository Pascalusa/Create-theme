<?php
/*

*/
/**
 * @package So_Lunch
 */
?>
<?php get_header(); ?>
<!-- <body <?php body_class(); ?>  style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/background-1.png); background-repeat: no-repeat; background-position:center center; background-size: cover; height:100vh;"> --> 

       <!-- Modal Structure -->
      <div class="cadre-commander" style=" background-color: white; width: 300px; border-radius: 8px; height: 282px; right: 0;top: 63px; position: absolute;">  
      
         <h5 style="text-align: center; font-weight: 900; font-size: 0.9em; font-family: 'Muli', sans-serif; margin-bottom: 17px;">Commandez votre Lunch Bowl !</h5>
         <li class="divider" style="height: 2px; overflow: hidden; width: 45px; margin-left: auto; margin-right: auto; background-color: #000000;"></li>
         <p style="font-size: 0.91em; width: 225px; margin-right: auto; margin-left: auto; font-family: 'Josefin Sans', sans-serif; margin-bottom: -7px;">Composez votre propre bowl en associant les ingrédients de votre choix. 1 base, 3 ingrédients dont 1 protéine ou fromage, et 1 sauce pour commencer, puis ajoutez-y tout ce que vous souhaitez!
         <br><br><div class="center-align">À partir de 9.90€</div></p> 


         <div class="row" style="margin-left: auto; margin-right: auto; margin-left: auto; margin-right: auto;  width: 80%;">
             <div class="col m6 l6">
                <a href="#openModal" style="position: relative; top: 7px; border: 2px solid red; border: 2px solid #abd3a7; padding: 7px; font-size: 12px; background-color: #abd3a7; color: #ffffff; font-family: 'Muli', sans-serif;"> A EMPORTER </a>
             </div>  
             <h5 class="col m6 l6">
                <a href="https://deliveroo.fr/fr/" style="position: relative; bottom: 10px; border: 2px solid red; border: 2px solid #abd3a7; padding: 7px; font-size: 12px; background-color: #abd3a7; color: #ffffff; font-family: 'Muli', sans-serif;">LIVRAISON</a>
             </h5>    
          </div>  
      </div>
   
      <!-- Debut modale 1l -->
 

            <div id="openModal" class="modalDialog">
              <div class="z-depth-5 a-emporter" style="background-color: rgba(255, 255, 255, 0);">
                <a href="#close" title="Close" class="close ">X</a>

                 <!-- Partie reservation -->
         <?php get_template_part( 'a-emporter');?>
                
              </div>
            </div>  
           

    <!-- Partie reservation -->

    <!-- Debut modale 2l-->

    <div id="openModal-livraison" class="modal-livaison">
      <div class="z-depth-5">
        <a href="#close" title="Close" class="close">X</a>
         <div class="row">
             <?php get_template_part( 'bowl');?>
         </div>  
      </div>
    </div> 
  
<!-- fin Debut modale -->



  <style>
/*     
    .dropdown-content li>a, .dropdown-content li>span{
          border-bottom: 2px solid #abd3a7;
      color:#000000;
      text-align: center;
    }
    .select-wrapper{
      width: 225px;
    } */

a {
  text-decoration: none;
  color: #000000;
}

a:hover {
  color: #ffffff;
}

/* Dropdown */
 .dropdown-commander{
    color: white;
  }

  .img_livraison{
    background-color: red; height: 233px; overflow: hidden;
  }

.dropdown-commander {
  display: inline-block;
  position: absolute;
  transform: translate(-50%, -40%); left: 50%; top: 6%; 

}

.dd-button {
  display: inline-block;
 border: 1px solid #ffffff;
  border-radius: 4px;
  padding: 10px 30px 10px 20px;
  background-color: #9ec39abf;
  cursor: pointer;
  white-space: nowrap;
}
 
.dd-button:after {
  content: '';
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid white;
}

.dd-button:hover {
  background-color: #eeeeee;
}


.dd-input {
  display: none;
}

.dd-menu {
  position: absolute;
  top: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 0;
  margin: 2px 0 0 0;
  box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
  background-color: #ffffff;
  list-style-type: none;
}

.dd-input + .dd-menu {
  display: none;
} 

.dd-input:checked + .dd-menu {
  display: block;
} 

.dd-menu li {
  padding: 10px 20px;
  cursor: pointer;
  white-space: nowrap;
}

.dd-menu li:hover {
  background-color: #f6f6f6;
}

.dd-menu li a {
  display: block;
  margin: -10px -20px;
  padding: 10px 20px;
}

.dd-menu li.divider{
  padding: 0;
  border-bottom: 1px solid #cccccc;
}

  .check_circle:active{
      border: 4px solid #fff!important;
  }

  .check_circle:hover{
      border: 4px solid #fff!important;
  }

  .material-icons{
     font-size: 50px!important;
    color: #fff!important;
   }

  .tabs .indicator {
    background-color: rgba(246, 178, 181, 0);
}

  #test1, #test2, #test3, #test4, #test5, #test6{
    /*border: 2px solid;*/
    position: relative;
    width: 75%;
    height:3px; 
    border-top: 2px solid #ffffff;
    transform: translate(-50%, -40%); left: 50%; top: 55%; position: absolute; 
    z-index: 1;
  }

  .material-icons:hover{
     color:rgba(255, 255, 255, 0.35)!important;
  }
  .material-icons:active{
     color:rgba(255, 255, 255, 0.35)!important;
  }

      /*  -----modeal----*/
 .modalDialog {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
/*     z-index: 0!important;  */
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 250ms ease-in;
  -moz-transition: opacity 250ms ease-in;
  transition: opacity 250ms ease-in;
  pointer-events: none;
}

.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog > div {
  width: 90%;
  position: relative;
  bottom: 190px;
  overflow: auto;
  height: 100%;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;

/*  background: -o-linear-gradient(bottom, rgb(245,245,245) 25%, rgb(232,232,232) 63%);
background: -moz-linear-gradient(bottom, rgb(245,245,245) 25%, rgb(232,232,232) 63%);
background: -webkit-linear-gradient(bottom, rgb(245,245,245) 25%, rgb(232,232,232) 63%);*/
}

.close {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: 10px;
  text-align: center;
  top: 70px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
}

.close:hover { background: #57a2d1; }

.modal-livaison {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 250ms ease-in;
  -moz-transition: opacity 250ms ease-in;
  transition: opacity 250ms ease-in;
  pointer-events: none;
}

.modal-livaison:target {
  opacity:1;
  pointer-events: auto;
}

.modal-livaison > div {
  width: 90%;
  position: relative;
  bottom: 190px;
  overflow: auto;
  height: 100%;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #06beb6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #48b1bf, #06beb6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #48b1bf, #06beb6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
    
    @media screen and (max-width: 400px) {
  .cadre-commander{
    top: 150px!important;
     transform: translate(-50%)!important; left: 50%!important;
    width : 274px!important;;
  }
}

@media screen and (max-width: 1633px) {
  .modalDialog > div, .modal-livaison > div {
    bottom: 130px;
    height: 90%;
    overflow-x: hidden;
    /*background-color: rgba(255, 255, 255, 0.54)!important;*/
}
}

@media screen and (max-width: 1426px) {
  #test1, #test2, #test3, #test4, #test5, #test6 {
        width: 95%!important;
}
}

@media screen and (max-width: 1303px) {
  .modalDialog > div, .modal-livaison > div {
    bottom: 100px;
    height: 90%;
    overflow-x: hidden;
}
}

@media screen and (max-width: 706px) {
  .modalDialog > div, .modal-livaison > div {
    bottom: 30px;
    height: 90%;
    overflow-x: hidden;
}
}


@media screen and (max-width: 992px) {
  .globale-check{
    display: none;   
  }
  .tabs {
      height: 300px!important;
      top: 250px!important; 
      z-index: 888!important;
  }
  .restriction1{
    display: none!important;
  }
  .modalDialog {
    background-color:#3c3c3b!important;
  }

}


#test1, #test2, #test3, #test4, #test5, #test6{
  top: 60%;
}

.restriction1{
   display: none;
}

.stripe-button-el{
      position: relative!important;
    top: 225px!important;
}

.dropdown-button{
  position: relative!important;
/*  top:346px!important;*/
}

.tabs{
    top: 290px!important;
    z-index: 10!important;
    /*width: 200px;*/
    position: absolute !important;
     transform: translate(-50%); left: 50%; 
}

.modal-livaison > div{
  background-color: rgba(255, 255, 255, 0.35);
  }
}

@media screen and (max-width: 529px) {
  .card  {
    width: 100%!important;
}
  #test1 {
    width: 100%!important;
}


}

    
    </style>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

      <script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" data-autopop="false" id="snipcart" data-api-key="MWU3YTcyY2QtOGJmZi00YWFkLTk4ZmItNGJiMTdkNTFkY2IyNjM2NTYwNTQ2ODAxODkyNDMw">
      </script>
 
      <script> 
        $(document).ready(function(){
    $('.collapsible').collapsible();
  });
     </script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.dropdown-button').dropdown('close');
        });
   </script>
   <script type="text/javascript">
    $(document).ready(function(){
        $(".stripe-button-el span").remove();
            $("button.stripe-button-el").removeAttr('style').css({
                "margin-left":"auto",
                "margin-right":"auto",
                "width":"100px",
                "padding":"5px",
                "background":"#abd3a8",
                "color":"white",
                "position":"relative",
                "top":"77px",
                "font-size":"1.3em" }).html('Valider');
        });
   </script>
<script>
  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
    $('.collapsible').collapsible();
  });

</script>

<script>         
function toggleByClass(className) {
     $("."+className).toggle();
}
</script>
 <script>         
function toggleByClass(className) {
     $("."+className).toggle();
}
</script> 



    </body>
  </html>
  