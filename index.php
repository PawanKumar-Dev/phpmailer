<?php
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';

$mail = new PHPMailer();

try {
    $mail->SMTPDebug = 0;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'pk687376alternative@gmail.com';                 
    $mail->Password   = 'pk110085';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('pk687376alternative@gmail.com', 'Pawan WebDev'); 
    $mail->addAddress('pk687376@gmail.com', 'Dude');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Mail Testing from PHPMailer';
    $mail->Body    = 'Just some random text for body';
    $mail->send();

    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>