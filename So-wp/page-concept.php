<?php
/*
Template Name: Notre concept elementor
*/
/**
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */
?>
<?php get_header(); ?>
  <div style="    position: relative;
    top: 254px;">
            <ul>
                <li><a class="add-to-cart" href="#" data-name="Apple" data-price="1.22">Apple $1.22</a></li>
                <li><a class="add-to-cart" href="#" data-name="Banana" data-price="1.33">Banana $1.33</a></li>
                <li><a class="add-to-cart" href="#" data-name="Shoe" data-price="22.33">Shoe $22.33</a></li>
                <li><a class="add-to-cart" href="#" data-name="Frisbee" data-price="5.22">Frisbee $5.22</a></li>
            </ul>
            <button id="clear-cart">Clear Cart</button>
        </div>


        <div>
            <ul id="show-cart">
                <li>???????</li>
            </ul>
            <div>You have <span id="count-cart">X</span> items in your cart</div>
            <div>Total Cart:$<span id="total-cart"></span></div>
        </div>



        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/shoppingCart.js"></script>

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
                    output += "<li>"
                        +cartArray[i].name
                        +" <input class='item-count' type='number' data-name='"
                        +cartArray[i].name
                        +"' value='"+cartArray[i].count+"' >"
                        +" x "+cartArray[i].price
                        +" = "+cartArray[i].total
                        +" <button class='plus-item' data-name='"
                        +cartArray[i].name+"'>+</button>"
                        +" <button class='subtract-item' data-name='"
                        +cartArray[i].name+"'>-</button>"
                        +" <button class='delete-item' data-name='"
                        +cartArray[i].name+"'>X</button>"
                        +"</li>";
                }

                $("#show-cart").html(output);
                $("#count-cart").html( shoppingCart.countCart() );
                $("#total-cart").html( shoppingCart.totalCart() );
            }

            $("#show-cart").on("click", ".delete-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCartAll(name);
                displayCart();
            });

            $("#show-cart").on("click", ".subtract-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCart(name);
                displayCart();
            });

            $("#show-cart").on("click", ".plus-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.addItemToCart(name, 0, 1);
                displayCart();
            });

            $("#show-cart").on("change", ".item-count", function(event){
                var name = $(this).attr("data-name");
                var count = Number($(this).val());
                shoppingCart.setCountForItem(name, count);
                displayCart();
            });


            displayCart();

        </script><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
<?php
get_template_part( 'footer2' );?>
