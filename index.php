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
    $mail->Username   = 'your@gmail.com';   // Enter your gmail-id              
    $mail->Password   = 'yourpassword';     // Enter your gmail app password that you generated 
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;
  
    $mail->setFrom('your@gmail.com', 'BeProblemSolver'); // This mail-id will be same as your gmail-id
    $mail->addAddress('receiver@email.com', 'Hey');      // Enter your reciever email-id
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Mail Testing from PHPMailer';      // You email subject line
    $mail->Body    = 'Just some random text for body';   // Body of email here
    $mail->send();

    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?> 
