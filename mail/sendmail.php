<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




// require 'vendor/autoload.php'; // Adjust based on your installation method
class Mailer{
    
    public function dathangmail($tieude,$noidung,$maildathang){
    $mail = new PHPMailer(true); // Enable exceptions
    $mail->CharSet='UTF-8';
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'lamnhatnguyen729@gmail.com'; // Your Mailtrap username
    $mail->Password = 'hrclehbjljogzrkk'; // Your Mailtrap password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    // Sender and recipient settings
    $mail->setFrom('lamnhatnguyen729@gmail.com', 'ISHOP');
    $mail->addAddress($maildathang, $maildathang);
    
    // Sending plain text email
    $mail->isHTML(false); // Set email format to plain text
    $mail->Subject = $tieude;
    $mail->Body    = $noidung;
    
    // Send the email
    if(!$mail->send()){
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
}