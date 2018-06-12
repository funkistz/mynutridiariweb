<?php  header('Content-type: application/json');
$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = '';

$msg='';
$email_status = 'error';

$email = $_POST['username'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];


	$status ='INIT';
	$ucount = 0;

	$dbhandle = @mysql_connect($dbhostname, $dbusername, $dbpassword)
  		or die("Unable to connect to MySQL");

	$selected = @mysql_select_db("mynutridiariv2",$dbhandle)
  		or die("Could not select db");

	//execute the SQL query and return records
	mysql_query("update users set password = '".$newpassword."' where email='".$email."' and password = '".$oldpassword."'");

$affected = mysql_affected_rows();
if($affected > 0) {
   $status = "DONE";

   		$to=$email;
		$subject="Password Changed";

		$body='Dear User, You password for MyNutriDiari was changed! <br/> <br/> Your new password is as follows;<br/> <br/> <strong>Username : </strong>'.$email.'<br/> <br/><strong>Password : </strong>'.$newpassword.'<br/> <br/><strong>NUTRITION DIVISION, MOH</strong>';

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


} else {
   $status = "FAIL";
}




$logindate = date('d-m-Y');
$logintime = date('h:i:s');

$items_array;
$items_array = array( "LOGIN_DATE" => $logindate,"LOGIN_TIME" => $logintime,"STATUS" => $status);

// return the JSON
$return_object=array();
$return_object["changepassword"] = $items_array;
$return_object["email_status"] = $email_status;
echo json_encode($return_object);
//echo $msg;


?>
