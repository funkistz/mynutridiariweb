?php  header('Content-type: application/json');
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
//include 'smtp/send_mail.php';
$to=$email;
$subject="Email verification";
$body='Hi, Welcome to MyNutriDiari <br/> <br/> You are just one step away from using the <strong>MyNutriApps II: MyNutriDiari</strong> application.
Please click on the link below to activate your <strong>MyNutriDiari</strong> account. <br/> <br/> <a href="'.$base_url.'activation.php?code='.$activation.'">'.$base_url.'activation.php?code='.$activation.'</a><br/> <br/> <strong>Currently, Our system automatically activates your account upon registration.  You should be able to login to the mobile app immediately after registration.  </strong><br/> <br/> Thank you. <br/> <br/> NUTRITION DIVISION<br/> MINISTRY OF HEALTH MALAYSIA';
//Send_Mail($to,$subject,$body);

class mailer {
    function send_html($from, $to, $subject, $body, $attachment=array(), $mime_type=array()) {
        require_once('Mail.php');
        require_once('Mail/mime.php');

        $crlf = "\n";
        $mime = new Mail_mime($crlf);
        $mime->setTXTBody('');
        $mime->setHTMLBody($body);
        
        if (count($attachment) > 0) { 
            for ($i = 0; $i < count($attachment); $i++) {
                $mime->addAttachment($attachment[$i], $mime_type[$i]);
            }
        }
        
        $body = $mime->get();
        $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);
        $hdrs = $mime->headers($headers);
        $smtp_params["host"]     = "10.17.237.55"; // SMTP host
        $smtp_params["port"]     = "25";                 // SMTP Port (usually 25)
        $smtp_params["auth"]     = false;
        $smtp_params["username"] = "1GOVUC\mynutridiari.moh";
        $smtp_params["password"] = "M@kanan.1234";
        
        // Sending the email using smtp
        $mail =& Mail::factory("smtp", $smtp_params);
        $mail->_params = '-f mynutridiari@moh.gov.my' ;
        if ($mail->send($to, $hdrs, $body)) {
        	$msg= "Retrieve successful. Please check email.";
		$status_data = 'SUCCESS';
        } else {
        	$msg= "Sending email failed.";
		$status_data = 'FAILED';
        }
    }
}
		
$mail = new mailer();
$mail->send_html('mynutridiari@moh.gov.my', $to, $subject, $body);

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
$items_array = array( "REGISTER_DATE" => $logindate,"REGISTER_TIME" => $logintime,"STATUS" => $status_data,"USER_INFO" => $user);

// return the JSON
$return_object=array();
$return_object["login"] = $items_array;
echo json_encode($return_object);
//echo $msg;

?>

