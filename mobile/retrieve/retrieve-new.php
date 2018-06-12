<?php header('Content-type: application/json');



$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = '';

$msg='';
$email_status = 'error';

if(!empty($_POST['email']) && isset($_POST['email']) )
{
// username  sent from form

$email = $_POST['email'];


	$password ='';
	$fullname ='';
	$ucount = 0;

	$dbhandle = @mysql_connect($dbhostname, $dbusername, $dbpassword)
  		or die("Unable to connect to MySQL");

	$selected = @mysql_select_db("mynutridiariv2",$dbhandle)
  		or die("Could not select db");

	//execute the SQL query and return records
	$result = mysql_query("SELECT * from users where email='".$email."'");

	if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {

		$password = $row['password'];
		$fullname = $row['fullname'];
		$status = $row['status'];
		$activation = $row['activation'];

		$ucount++;
		}

	}

	if ($ucount==1) {
		// sending email
		//include 'smtp/send_mail.php';
		$to=$email;
		$subject="Password Retrieval";

		if ($status==0) {
			$body='Dear '.$fullname.', Welcome to MyNutriDiari <br/> <br/> You are just one step away from using the <strong>MyNutriApps II: MyNutriDiari</strong> application.
Please click on the link below to activate your <strong>MyNutriDiari</strong> account. <br/> <br/> <a href="http://mynutridiari.moh.gov.my/mynutridiari/mobile/registration/activation.php?code='.$activation.'">http://mynutridiari.gov.my/mynutridiari/mobile/registration/activation.php?code='.$activation.'</a><br/> <br/><strong>Your login credentials to the MyNutriDiari are as follows;</strong> <br/> USERNAME : '.$email.'<br/>PASSWORD : '.$password.'<br/> <br/> Thank you. <br/> <br/> NUTRITION DIVISION<br/> MINISTRY OF HEALTH MALAYSIA';

		} else {

			$body='Dear '.$fullname.', <br/> <br/> This is an email from <strong>MyNutriDiari</strong> <br/> <br/> You received this email because you forgotten your pasword and requested to retrieve it.  If you did not do so, please ignore this email.  <br/> <br/><strong>Your login credentials to the MyNutriDiari are as follows;</strong> <br/> USERNAME : '.$email.'<br/>PASSWORD : '.$password.'<br/> <br/> Thank you. <br/> <br/> NUTRITION DIVISION<br/> MINISTRY OF HEALTH MALAYSIA';

		}


		//Send_Mail($to,$subject,$body);
class mailer {
    function send_html($from, $to, $subject, $body, $attachment=array(), $mime_type=array()) {

				require_once('../../protected/extensions/smtpmail/PHPMailer.php');

				$mail = new PHPMailer;

				//Enable SMTP debugging.
				// $mail->SMTPDebug = 3;
				//Set PHPMailer to use SMTP.
				$mail->isSMTP();
				//Set SMTP host name
				$mail->Host = "smtp.gmail.com";
				//Set this to true if SMTP host requires authentication to send email
				$mail->SMTPAuth = true;
				//Provide username and password
				$mail->Username = "mynutridiari@gmail.com";
				$mail->Password = "M@kanan.1234";
				//If SMTP requires TLS encryption then set it
				$mail->SMTPSecure = "tls";
				//Set TCP port to connect to
				$mail->Port = 587;

				$mail->From = "mynutridiari@moh.gov.my";
				$mail->FromName = "MyNutriDiari";

				$mail->addAddress($to);

				$mail->isHTML(true);

				$mail->Subject = $subject;
				$mail->Body = $body;

				if(!$mail->send())
				{
						return 'error';
				}
				else
				{
						return 'success';
				}
    }
}

		$mail = new mailer();
		$email_status = $mail->send_html('mynutridiari@moh.gov.my', $to, $subject, $body);

		$status_data = 'SUCCESS';

	} else if ($ucount>1) {
		$msg= 'More than 1 user found. Admin has to check.';
		$status_data = 'NOTFOUND';
	} else {
		$msg= 'No user found.  Please check email or username entered.';
		$status_data = 'NOTFOUND';
	}


}
$logindate = date('d-m-Y');
$logintime = date('h:i:s');
$user = array("USER_EMAIL" => $email,"USER_PASSWORD" => $password,"USER_FULLNAME" => $fullname);

$items_array;
$items_array = array( "RETRIEVE_DATE" => $logindate,"RETRIEVE_TIME" => $logintime,"STATUS" => $status_data,"USER_INFO" => $user);

// return the JSON
$return_object=array();
$return_object["login"] = $items_array;
$return_object["email_status"] = $email_status;
echo json_encode($return_object);
//echo $msg;



?>
