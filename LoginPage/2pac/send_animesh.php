<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);  
$email = $_SESSION['email'];
$epassword = $_SESSION['epassword']; 
$feedback = $_SESSION['feedback'];
//echo $email;
//echo $epassword;
try {                    
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $_SESSION['email'];                 // SMTP username
    $mail->Password = $_SESSION['epassword'];                           // SMTP password
    $mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('animesh.wtl@gmail.com', 'feedback');
    $mail->addAddress('animesh.wtl@gmail.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
   /* $mail->addReplyTo('animesh.wtl@gmail.com', 'alternative name to be shown');*/
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    
    /*$username=$_SESSION['username'];
    $email='vitgandu@gmail.com';
    $password=$_SESSION['password'];
    */
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Feedback Form';
    $mail->Body    = "$feedback";
    $mail->AltBody = 'kool';
                        
    $mail->send();
    
            echo "<script> alert('Your Feedback has been sent to admin.');
            window.top.location.href='frame.php';</script>";
        
            
}
 catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>