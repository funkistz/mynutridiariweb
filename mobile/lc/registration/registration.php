<?php  header('Content-type: application/json');
error_reporting(E_ERROR);
include 'db.php';
$msg='';
if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['password']) &&  isset($_POST['password']) )
{
// username and password sent from form
$fullname=mysqli_real_escape_string($connection,$_POST['fullname']);
$email=mysqli_real_escape_string($connection,$_POST['email']);
$password=mysqli_real_escape_string($connection,$_POST['password']);
$password1=$password;
// regular expression for email check
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

if(preg_match($regex, $email))
{ 
//$password=md5($password); // encrypted password
$activation=md5($email.time()); // encrypted email+timestamp
$count=mysqli_query($connection,"SELECT uid FROM users WHERE email='$email'");
// email check
if(mysqli_num_rows($count) < 1)
{
mysqli_query($connection,"INSERT INTO users(email,password,activation,fullname) VALUES('$email','$password','$activation','$fullname')");
// sending email
include 'smtp/send_mail.php';
$to=$email;
$subject="Email verification";
$body='Hi, Welcome to MyNutriDiari <br/> <br/> You are just one step away from using the <strong>MyNutriApps II: MyNutriDiari</strong> application.
Please click on the link below to activate your <strong>MyNutriDiari</strong> account. <br/> <br/> <a href="'.$base_url.'activation.php?code='.$activation.'">'.$base_url.'activation.php?code='.$activation.'</a><br/> <br/> Thank you. <br/> <br/> NUTRITION DIVISION<br/> MINISTRY OF HEALTH MALAYSIA';
Send_Mail($to,$subject,$body);
$msg= "Registration successful, please activate email.";
$status_data = 'SUCCESS';
}
else
{
$msg= 'The email is already taken, please try new.'; 
$status_data = 'EXIST';
}

}
else
{
$msg = 'The email you have entered is invalid, please try again.'; 
$status_data = 'INVALID';
}

}
$logindate = date('d-m-Y');
$logintime = date('h:i:s');
$user = array("USER_EMAIL" => $email,"USER_PASSWORD" => $password1,"USER_FULLNAME" => $fullname);

$items_array;
$items_array = array( "SERVER" => "MOH","REGISTER_DATE" => $logindate,"REGISTER_TIME" => $logintime,"STATUS" => $status_data,"USER_INFO" => $user);

// return the JSON
$return_object=array();
$return_object["login"] = $items_array;
echo json_encode($return_object);
//echo $msg;


?>