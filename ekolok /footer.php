

 <?php get_template_part('mentions-legale'); ?>

 <!-- Menu Mobile -->    
      <!-- <ul class="menu-mobile hide-on-large-only"> -->
         <!--  <a href="!#"><li class="cercle1"><img src="img/point-menu.png" alt="image-menu-cercle"></li></a> -->
         <!--  <a href="#modal3" class="text-menu modal-trigger"><li class="cercle1"><img src="img/point-menu.png" class="images-cercle" alt="image-menu-cercle"></li></a>
          <a href="#modal2" class="text-menu modal-trigger"><li class="cercle1" ><img src="img/point-menu.png" class="images-cercle" alt="image-menu-cercle"></li></a>
          <a href="#modal1" class="text-menu modal-trigger"><li class="cercle1"><img src="img/point-menu.png" class="images-cercle" alt="image-menu-cercle"></li></a>
      </ul> 


<!-Import jQuery before materialize.js-->
  <script type=text/javascript  src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <script> 

  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script>   


<?php wp_footer(); ?>
</body>
</html>

