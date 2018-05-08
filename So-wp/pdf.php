
<?php
/*
Template Name: 
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
<!DOCTYPE html>
<html>
<head>
   <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
    <title>So Lunch</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

</head>

<body>
<a onclick="javascript:facturePDF()">gg</a>
<!-- 1description, quantité, prix, total et https://codepen.io/nagasai/pen/JKKNMK Invoice template =
https://www.google.fr/imgres?imgurl=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Ff1%2F1a%2F27%2Ff11a277b25a4f24ec009c3fc234609ec.png&imgrefurl=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F503277327085660318%2F&docid=OwXYeqHwgA3DgM&tbnid=iyh3_opy6EGf5M%3A&vet=10ahUKEwjTps6u69raAhXGUhQKHW8DAD8QMwiZAShOME4..i&w=1600&h=1200&bih=798&biw=1745&q=facture%20template%20webdesign&ved=0ahUKEwjTps6u69raAhXGUhQKHW8DAD8QMwiZAShOME4&iact=mrc&uact=8#h=1200&imgdii=iyh3_opy6EGf5M:&vet=10ahUKEwjTps6u69raAhXGUhQKHW8DAD8QMwiZAShOME4..i&w=1600
 https://gumroad.com/l/Clro http://www.designbolts.com/2017/01/18/top-10-best-free-professional-invoice-design-templates-in-ai-psd-format/, 
1-- https://www.freshbooks.com/invoice-templates/web-design1-- http://www.designbolts.com/wp-content/uploads/2017/01/Free-Invoice-Template-PSD.jpg
https://www.google.fr/imgres?imgurl=http%3A%2F%2Fdinara.me%2Fwp-content%2Fuploads%2F2017%2F12%2Fdesign-invoices-pink-invoice-web-design-invoice-template.jpg&imgrefurl=http%3A%2F%2Fdinara.me%2Fdesign-invoices%2Fdesign-invoices-pink-invoice-web-design-invoice-template%2F&docid=jT1tth5EwzY8-M&tbnid=NUR09URLVhBS6M%3A&vet=12ahUKEwia76-769raAhXBVhQKHXRPAVw4yAEQMygHMAd6BAgBEAg..i&w=700&h=525&bih=798&biw=1745&q=facture%20template%20webdesign&ved=2ahUKEwia76-769raAhXBVhQKHXRPAVw4yAEQMygHMAd6BAgBEAg&iact=mrc&uact=8#h=525&imgdii=NUR09URLVhBS6M:&vet=12ahUKEwia76-769raAhXBVhQKHXRPAVw4yAEQMygHMAd6BAgBEAg..i&w=700 
http://www.designbolts.com/wp-content/uploads/2017/01/Beautiful-professional-Invoice-design-template-PSD.jpg
url http://so-lunch2018-usapascal366265.codeanyapp.com/pdf/
--> 
  
 <style>

   
         .total-cart::after, #total-cart2::after {
             content: " € ";
        } 
</style>    
  
  <div id="content">

    
     <table class="striped centered responsive-table">
            <thead>
                <tr>
                  <th>Description</th>
                  <th>Quantité</th>
                  <th>Prix</th>
                  <th>Total</th>
                </tr>
            </thead> 
            <tbody id="show-cart">
            </tbody>
         </table>
    
    <input type="text" id="first_name" name="test" value="">
     <input type="submit"  value="send">
</div>
<div id="editor">kkkkkk</div>
<button id="cmd">Generate PDF</button>
  
  
     
<!--   <a href="http://www.siteduzero.com" onclick="alert('Vous avez cliqué !'); return false;">Cliquez-moi !</a> -->

  
 <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/shoppingCart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.1/alertify.min.js"></script>
  <script>

var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
      doc.text(25, 25,'name');
      var name = $('#first_name').val;

$('#cmd').click(function () {  

//  var content = document.getElementById('content').innerHTML;

   doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    
    doc.save('sample-file.pdf');
});

// This code is collected but useful, click below to jsfiddle link.

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

//                 for (var i in cartArray) {
//                     output += "<li><div class='row'><div class='col s3 m3 l5' style='border-top: 2px solid; background-color: green; height: 45px;'><h5 style='text-align: center;'>"
//                         +cartArray[i].name
//                         +"</h5></div>"
//                         +"<div class='col s3 m3 l3' style='border-top: 2px solid; height: 45px; background: beige;'><input style='text-align: center;' class='item-count' type='number' data-name='"
//                         +cartArray[i].name
//                         +"' value='"+cartArray[i].count+"'></div><div class='col s3 m3 l3' style='border-top: 2px solid; height: 45px; background: orange;'><h5 style='text-align: center;'>"
//                         +cartArray[i].price
//                          +"€</h5></div><div class='col s3 m3 l1' style='border-top: 2px solid; height: 45px; background: #00c4ff;'><h5 style='text-align: center;'>"
//                         +cartArray[i].total
//                         +"</h5>"
//                         // +" <button class='plus-item' data-name='"
//                         // +cartArray[i].name+"'>+</button>"
//                         // +" <button class='subtract-item' data-name='"
//                         // +cartArray[i].name+"'>-</button>"
//                         // +" <button class='delete-item' data-name='"
//                         // +cartArray[i].name+"'>X</button>"
//                         +"</div></div></li>";
//                 }
              
              for (var i in cartArray) {
                    output += "<tr style='background-color:red;'><td>"
                        +cartArray[i].name
                         +"<td>"
                        +" <input class='item-count' type='number' data-name='"
                        +cartArray[i].name
                        +"' value='"+cartArray[i].count+"' ></td><td>"
                        +cartArray[i].price
                        +"€</td></td>"
                        +"<td> "+cartArray[i].total
                        +"€</td>"
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
                $(".total-cart").html( shoppingCart.totalCart() );
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

        </script>
</body>

</html>
 



<!--      $( document ).ready(function() {
  alertify.prompt( 'Prompt Title', 'Prompt Message', 'Prompt Value'
               , function(evt, value) { alertify.success('You entered: ' + value) }
               , function() { alertify.error('Cancel') });

});

 
 -->