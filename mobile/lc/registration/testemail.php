<?php  header('Content-type: application/json');
//error_reporting(E_ERROR);

$msg='';

$email=$_POST['email'];

include 'smtp/send_mail.php';
$to=$email;
$subject="Activation Email";
$body='Emel Pengaktifan';

Send_Mail($to,$subject,$body);
$msg = 'done';


echo $msg;

?>