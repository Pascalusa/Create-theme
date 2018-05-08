<?php
/**
 * The template for displaying email->gmail
 * @link https://github.com/PHPMailer/PHPMailer
 *
 * @package Ekolok
 */

get_header(); ?>

     <?php
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
    $mail->Username = '*';                 // SMTP username
    $mail->Password = '*';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;   
                             // TCP port to connect to
     

    //Recipients
    $mail->setFrom('*', 'Website Ekolok');
    $mail->addAddress('*', 'Projet');     // Add a recipient        // Name is optional


    $name = $_POST['first_name'];
    $email = $_POST['email'];
    $body = $_POST['body'];
    $content = $_POST['content'];
    $subject = $_POST['subject'];
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject ." - ".  'Website Ekolok';
    $mail->Body    = 'Nom de l\'expéditeur et l\'email :' .$name. ." - ". .$email. '<br> <br> <br> ' .$body .'<br> <br> Lien image :' . $content;

    $mail->send();
    echo 'Message has been sent';
 } catch (Exception $e) {
    echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
}
