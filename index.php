<?php

include 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = true;
//$mail->Username = null;
//$mail->Password = null;
//$mail->SMTPSecure = 'tls';
$mail->Port = 1025;


$mail->setFrom('info@mailtrap.io', 'Mailtrap');
$mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
$mail->addAddress('recipient1@mailtrap.io', 'Tim');
$mail->addCC('cc1@example.com', 'Elena');
$mail->addBCC('bcc1@example.com', 'Alex');

$mail->Subject = 'Test Email via Mailtrap SMTP using PHPMailer';

$mail->isHTML(true);

$mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email I’m sending using SMTP mail server with PHPMailer.</p>";
$mail->Body = $mailContent;

if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}