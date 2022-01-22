<?php
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
require "PHPMailer/src/OAuth.php";
require "PHPMailer/src/POP3.php";
require "PHPMailer/src/SMTP.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

print_r($mail);
try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'truongle.281000@gmail.com'; // SMTP username
    $mail->Password = 'csyufvdrlcyvjvvo'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('truongle.281000@gmail.com');
    $mail->addAddress("$email"); // Add a recipient


    //Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Online QUIZ';
    $mail->Body = "Mã xác nhận của bạn là: $randomCODE";

    $mail->send();
    echo 'Message has been sent';
}
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>