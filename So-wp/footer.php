<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package So_Lunch
 */

?>       

<!-- | Design by -->

</section>
 <footer style="background-color: #abd3a8;
    z-index: 999;
    bottom: 0;
    position: fixed;
    width: 100%;
    height: 45px;"> 
            
                <div class="row" style="margin-bottom: 0px; height: 100%;">
                  <div class="col s12 m12 l4 hide-on-med-and-down" style="height: 100%;">
      
                  </div>
                  <div class="col s12 m12 l4" style="height: 100%;">
                    <h6 style="text-align: center; position: relative; top: 7px; color: #fff;font-family: 'Muli', sans-serif;  "> © Copyright all rights reserveds - <a href="<?php bloginfo('url'); ?>/mentions-legales" style="color: #fff; font-family: 'Muli', sans-serif;">Mention Légales</a> - <a href="<?php bloginfo('url'); ?>/CGV" style="color: #fff; font-family: 'Muli', sans-serif;">CGV</a> </h6> 
                  </div>
                  <div class="col s12 m12 l4" style="height: 100%;">
                    <div style=" margin-right: auto; margin-left: auto; width: 285px;margin-right: auto; margin-left: auto;  width: 285px;position: relative;top: 6px;">
                      <div style=" width: 42%; margin-right: auto; margin-left: auto;">
                         <a href="https://www.facebook.com/solunchdijon/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png" class="img-social" style="margin-right: 7px; position: relative;  top: 1px!important;
                           width: 32px!important;"></a>
                         <!-- <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png" class="img-social"  style="margin-right: 7px; position: relative; top: 1px!important;
    width: 32px!important;"></a> -->
                         <!-- <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/pinterest.png" class="img-social" style="margin-right: 7px;position: relative; top: 1px!important;
    width: 32px!important;"></a> -->
                         <a href="https://www.instagram.com/solunchdijon/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png" class="img-social" style=" margin-right: 7px; position: relative; top: 1px!important;
    width: 32px!important;"></a>
     <!--                     <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/google+.png" class="img-social" style="margin-right: 7px;position: relative; top: 1px!important;
    width: 32px!important;"></a> -->
                         <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/youtube.png" class="img-social" style="position: relative; top: 1px!important;
                          width: 32px!important;"></a>
                      </div>    
                    </div>   
                  </div>
                </div>

                <div class="z-depth-4 globale-instagram" style=" height: 200px; background-color: rgba(255, 255, 255, 0.44); position: relative; bottom: 245px; overflow-y: auto; direction: horizontal; width: 100%;">

                    <h5  class="suivez-nous" style=" color: #ffffff;
                       font-family: 'Muli', sans-serif; position: absolute; transform: translate(-50%); left: 50%; bottom: 160px; width: 179px; font-size: 13px; border: 2px solid; padding: 7px;">Suivez-nous sur Instagram</h5>
                  
                    <!-- Card loop -->       
                              <div style="height: 12px; width: 100%;">

                                <div id='instafeed' style="display: flex; justify-content: center; flex-wrap: wrap;"></div>

                              </div>  
                  </div>    
</footer> 


<style>

@media screen and (max-width: 992px) {
.globale-instagram {
  position: absolute!important;
  bottom: 45px!important;
}
}
  
 
  #instafeed {
    margin: 0 0.5em;
}
#instafeed a {
       margin: 0;
    position: relative;
    overflow: hidden;
    display: inline-block;
    transition: all .3s;
    height: 162px;
    background-size: cover;
    width: 162px;
    top: 33px;
}
  
  

</style>

 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
      <script type="text/javascript">
        var feed = new Instafeed({
            userId:4915822408, 
            accessToken: '4915822408.1677ed0.034958fc08be4df988d38305167b629f', 
            get: 'user',
            resolution: 'low_resolution',
            limit: 91,
            template: '<a href="{{link}}" target="_blank" style="background: white url({{image}}); background-size: cover;"></a>'
          });
          feed.run();
     </script>
       <script type="text/javaScript" > 
           $(document).ready(function(){
              $(".side-nav").sideNav();
           });
        
       </script>

<?php wp_footer(); ?>

</body>
</html>













