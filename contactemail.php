<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include_once "enc.php";
ob_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    if(empty($email) || empty($phone) || empty($name) || empty($company) || empty($message)){
        $errormsg = "Please input fields"; 
    }

    else {

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
$mail->Subject = 'Message from '.$name.'';
$mail->Body = '<h2>Name: '.$name.'.
</h2><br>
<h2>Email: '.$email.'</p><h2>
<h2>Phone No: '.$phone.'</h2><br>
<h2>Company: '.$company.'</h2><br>
<h2>Message: '.$message.'</h2><br>';
$mail->AltBody = "This is the plain text version of the email content";
$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress($mainemail);
$mail->addReplyTo('noreply@gmail.com');
try {
    $mail->send();
    echo "Your message has been sent";
    $successmsg = "Your message has been sent";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    $errormsg = "Sorry,failed to send your message";
}

    }
    header("Location: index.php?error=$errormsg&success=$successmsg");
}

ob_end_flush();