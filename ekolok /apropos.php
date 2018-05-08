
<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>


 <?php get_template_part('mobile-menu'); ?>
<a href="#" data-activates="slide-out" style="position: absolute;
    z-index: 99999999;" class="button-collapse mobile-m hide-on-large-only"><i class="material-icons" style="font-size: 3em;">menu</i></a>
            


      <div class="globale-img-team" style="height: 60vh;">
      	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team-ekolok.png" alt="team-ekolok" class="img-team">
        <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
          <h1 style="line-height: 200%;">
            <a href="#" class="effect-shine"> Ekolok</a>
          </h1>
        </div> 
      </div>

      <div class=" " style="position: relative; bottom:70px; background-color: #e94f06; border-top: 4px solid #ffffff; z-index: 99;"></div>

         <div style="height: 55px; width: 62px; background-color: #ffffff; border-radius: 50%;     position: relative; bottom: 104px; margin-right: auto; margin-left: auto;"><div style="    background-color: #e94f06; height: 25px;position: relative; top: 30px;"></div></div>
         <?php get_template_part('modal-about'); ?> 
 


              <div class="row" style="    height: 45px;"> 
  
                  <div class="col s12 m12 l4" style="  position: relative; bottom: 130px;">
                      <figure class="snip1538 z-depth-3">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample83.jpg" alt="photo de la fonfatrice 1" />
                        <figcaption>
                          <h3>Natalya <span>Undergrowth</span></h3>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                  </div>    
                   <div class="col s12 m12 l4" style="position: relative; bottom: 130px;"">    
                      <figure class="snip1538 z-depth-3">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample83.jpg" alt="photo de la fonfatrice 2" />
                        <figcaption>
                          <h3>Natalya <span>Undergrowth</span></h3>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                  </div> 
                  <div class="col s12 m12 l4" style="  position: relative; bottom: 130px;">
                      <figure class="snip1538 z-depth-3">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample83.jpg" alt="photo de la fonfatrice 3" />
                        <figcaption>
                          <h3>Natalya <span>Undergrowth</span></h3>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                  </div>  
                  <!-- <div style="position: relative; bottom: 109px;">
                  <a href="#" style="font-family: 'Vollkorn', serif; color: #ffffff;">©</a> Copyright all rights reserved - <a href="#popup"  style="font-family: 'Vollkorn', serif; color: #ffffff;">Mentions légales</a>
                  <div> -->
              </div>   
      </div> 


<style>

body, html{
  background-color: #e94f06!important;

}

h1 a {
  color: #fff;
  font-size: 5vw;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 6px;
  position: absolute!important;

            top: 50%; 
            transform: translate(-50%);
  display: inline-block;
  font-family: 'Merriweather', serif;
  -webkit-mask-image: linear-gradient(-75deg, rgba(0,0,0,.6) 30%, #000 50%, rgba(0,0,0,.6) 70%);
  -webkit-mask-size: 200%;
  animation: shine 2s linear infinite;
}

@keyframes shine {
  from { -webkit-mask-position: 150%; }
  to { -webkit-mask-position: -50%; }
}

@import url(https://fonts.googleapis.com/css?family=Monsterrat:400,700;);
.snip1538 {
  background-color: #222222;
  color: #ffffff;
  display: inline-block;
  font-family: 'Monsterrat', sans-serif;
  font-size: 16px;
  margin: 10px 5px;
  max-width: 395px;
  min-width: 230px;
  margin-right: auto;
    margin-left: auto;
    display: block;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
}

.snip1538 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.snip1538:after {
  background-color: #B46E3C;
  bottom: 0;
  content: '';
  height: 0%;
  left: 0;
  position: absolute;
  width: 10px;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.snip1538 img {
  vertical-align: top;
  max-width: 100%;
  backface-visibility: hidden;
}

.snip1538 figcaption {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  align-items: center;
  z-index: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  line-height: 1em;
  opacity: 0;
}

.snip1538 h3 {
  font-size: 1em;
  font-weight: 400;
  letter-spacing: 1px;
  margin: 0;
  text-transform: uppercase;
}

.snip1538 h3 span {
  display: block;
  font-weight: 700;
}

.snip1538 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.snip1538:hover > img,
.snip1538.hover > img {
  opacity: 0.1;
}

.snip1538:hover:after,
.snip1538.hover:after {
  height: 100%;
}

.snip1538:hover figcaption,
.snip1538.hover figcaption {
  opacity: 1;
}



</style>


<script type=text/javascript  src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <script> 
       
       $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });

<?php get_footer(); ?>
