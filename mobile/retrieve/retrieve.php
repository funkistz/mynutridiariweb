<?php header('Content-type: application/json');



$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = 'xxxxx';

$msg='';
if(!empty($_POST['email']) && isset($_POST['email']) )
{
// username  sent from form

$email = $_POST['email'];


	$password ='';
	$fullname ='';
	$ucount = 0;

	$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

	$selected = mysql_select_db("mynutridiariv2",$dbhandle) 
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
echo json_encode($return_object);
//echo $msg;



?>