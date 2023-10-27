<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include_once "enc.php";
ob_start();




        $mail = new PHPMailer(true);
$mail->SMTPDebug = 3;   
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->isHTML(true);
$mail->Username = EMAIL;
$mail->Password = PASSWORD;
// $mail->SetFrom('simpletech.notify@gmail.com', 'notification');
$mail->Subject = 'Reset your password for Yurland';
$mail->Body = '<p>We received a password reset request. The link to reset your password is below 
to make this request, you can ignore this email</p><br><p>Here is your 6 digit code: '.$random.'<br>
This is your reset link '.$url.'
</p>';
$mail->AltBody = "This is the plain text version of the email content";
$mail->From = "$mainemail";
$mail->FromName = "Yurland";
$mail->AddAddress($userEmail);
// $mail->addReplyTo('info@simpletech.com.ng');
try {
    $mail->send();
    echo "success";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

header("Location: forgotpassword.php?reset=success");




ob_end_flush();