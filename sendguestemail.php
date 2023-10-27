<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include_once "enc.php";
ob_start();

$room = $_GET['room'];
$name = $_GET['name'];

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
$mail->Subject = 'From HAVEN EXPERIENCE LODGING';
$mail->Body = '<h2>Thank you for choosing '.$room.'.

</h2><br>
<h2>'.$name.' make sure to get back to us as soon as possible</p><h2>
<h2>Best Regards</h2><br>';
$mail->AltBody = "This is the plain text version of the email content";
$mail->From = "$mainemail";
$mail->FromName = "HAVEN EXPERIENCE LODGING";
$mail->AddAddress($_GET['email']);
$mail->addReplyTo('noreply@gmail.com');
try {
    $mail->send();
    echo "success";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

header("Location: inserters/uploadguestdetails.php?message=success");




ob_end_flush();