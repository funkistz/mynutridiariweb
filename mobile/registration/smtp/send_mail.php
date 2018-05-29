<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "nutrition.apps@gmail.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "tls://smtp.gmail.com"; // Amazon SES server, note "tls://" protocol
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = "nutrition.apps@gmail.com";  // SMTP  username
$mail->Password   = "pemakanan01E3";  // SMTP password
$mail->SetFrom($from, 'Nutrition Division MOH');
$mail->AddReplyTo($from,'Nutrition Division MOH');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();   
}
?>