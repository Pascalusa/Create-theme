<?php
/**
 * The template for displaying email->gmail
 * @link https://github.com/PHPMailer/PHPMailer
 *
 * @package Ekolok
 */

get_header(); ?>

     <?php

    //   if(!empty($_FILES['attachment']))
    // {
    //   $dossier = 'img/';
    //   $fichier = basename($_FILES['nomfichier']['tmp_name']);
    //   if(move_uploaded_file($_FILES['nomfichier']['tmp_name'], $dossier.$fichier ))
    //   {
    //    $msg_msg = "bien";
    //   }
    //   else
    //   {
    //     $msg_msg = "non";
    //   }
    // }
//Import PHPMailer classes into the global namespace

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'projetmooc1@gmail.com';                
    $mail->Password = 'Jesuisbeau';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; 
    $mail->CharSet = 'UTF-8';  
                            
   
    if(isset($_POST['submit'])){
      extract($_POST);
      {
          $msg = '
          <body>
          <h6 style="text-align:center; color:#b9f6ca;"> Votre message à bien été envoyé</h6>
          </body>
          ';
      }
    }
     
    //Recipients
    $mail->setFrom('projetmooc1@gmail.com', 'Website Ekolok');
    $mail->addAddress('projetmooc1@gmail.com', 'Projet');     // Add a recipient        // Name is optional


    $name = htmlspecialchars($_POST['first_name']);
    $email = htmlspecialchars($_POST['email']);
    $body = htmlspecialchars($_POST['body']);
    $image = htmlspecialchars($_POST['image']);
    $subject = htmlspecialchars($_POST['subject']);
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject ." - ".  'Website Ekolok';
    $mail->Body    =  '<html>
         <body>
           <h4 style="text-align:center;">  Sujet du message : '.$subject.' </h4> <br>
          <h4 style="text-align:center;">  Nom de l\'expéditeur : '.$name.' </h4> <br>
          <h4 style="text-align:center;">  Email de l\'expéditeur : '.$email.' </h4> <br>
          <h4 style="text-align:center;">  Message de l\'expéditeur : <br> <br>'.$body.' </h4> <br>
          <h4 style="text-align:center;">  Image de l\'expéditeur : '.$image.' </h4> 
          </body>
          </html>
          ';

    $mail->send();
 } catch (Exception $e) {
    
     echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 ?>

<!-- ******************************************************************************
                                  Contact
 ****************************************************************************** -->

    <div id="openModal" class="modalDialog-contact">
      <div> 
        <a href="#close" title="Close" class="close">X</a>
                 <!-- Content--> <!-- ekolok&#64;riseup.net -->
            <h4 class="center-align">Contactez nous</h4>
            <?php echo $msg ?>
              <form method="post" action="">  
                <div class="card-panel grey lighten-5 z-depth-1 center-align">
                  <span class="black-text" style="font-size: 1.5em; border-bottom: 2px solid;">
                        <div class="row">
                          <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">label</i>
                            <input id="subject" class="materialize-textarea" placeholder="Sujet" type="text" name="subject" required></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="first_name" type="text" data-length="15" name="first_name" style="width: 90%!important;" required>
                            <label for="hyy">Nom</label>
                          </div>
                          <div class="input-field col s12 m6 l6 ">
                            <i class="material-icons prefix">local_post_office</i>
                            <input id="email" type="email" name="email" class="validate" required>
                            <label for="email" data-error="Votre email n'est pas valide" data-success="Ok">Email</label>
                          </div>
                        </div>
                        <div class="row ">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="textarea1" class="materialize-textarea" name="body" required></textarea>
                            <label for="textarea1">Message</label>
                          </div>
                           <div class="image-preview-multiple">
                            <input style="background-color: red;" type="hidden" role="uploadcare-uploader" name="image" data-public-key="015e5776c5089465e5dd" data-images-only data-image-shrink="1024x1024" data-multiple=""/>
                          </div>   
                        </div>
                        <input type="submit" value="Envoyer" name="submit" class="waves-effect waves-light btn">     
                  </span>
                </div>
        
              </form> 
       
      </div>
    </div>

    <style>
      
       
@media screen and (max-width: 992px){
      .modalDialog-contact > div {
        width: 100%!important;
        }
}

    </style>
<script charset="utf-8" src="https://ucarecdn.com/libs/widget/3.1.2/uploadcare.full.min.js"></script>
<!--Import jQuery before materialize.js-->
  <script type=text/javascript  src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

      <!-- fin contact form -->
       
     