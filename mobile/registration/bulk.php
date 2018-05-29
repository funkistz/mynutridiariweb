<?php  header('Content-type: application/json');
$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';


$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle) 
  		or die("Could not select db");
$ucount=0;
$result = mysql_query("SELECT * from users where STATUS = '0'");
//$result = mysql_query("SELECT * from users where email = 'hezly.mohamed@gmail.com'");

		$id = array();
		$email = array();
		$fullname = array();
		$activation = array();
		


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['uid'];
		$email[$ucount] = $row['email'];
		$fullname[$ucount] = $row['fullname'];
		$activation[$ucount] = $row['activation'];
	
		$ucount++;
		}

	}
    

$sentcount = $ucount;

$userdata = array();

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
        $smtp_params["password"] = "xxxxxxxx";
        
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

for ($i = 0; $i < $ucount; $i++) {
	$userdata[$i] = array("ID" => $id[$i],
				"EMAIL" => $email[$i],
				"FULLNAME" => $fullname[$i],
				"ACTIVATION" => $activation[$i]);
				
$to=$email[$i];
$subject="Activate your MyNutriDiari Account";
$body='Dear user, Welcome to MyNutriDiari <br/> <br/> You are just one step away from using the <strong>MyNutriApps II: MyNutriDiari</strong> application.
Please click on the link below to activate your <strong>MyNutriDiari</strong> account. <br/> <br/> <a href="http://mynutridiari.moh.gov.my/mynutridiari/mobile/registration/activation.php?code='.$activation[$i].'">http://mynutridiari.moh.gov.my/mynutridiari/mobile/registration/activation.php?code='.$activation[$i].'</a><br/> <br/>You can download the MyNutriDiari app from the Google Play Store using this link.<br /> <a href="https://play.google.com/store/apps/details?id=my.gov.moh.mynutridiariandroid&hl=en">https://play.google.com/store/apps/details?id=my.gov.moh.mynutridiariandroid&hl=en</a><br/> <br/> Thank you. <br/> <br/> NUTRITION DIVISION<br/> MINISTRY OF HEALTH MALAYSIA';



		
$mail = new mailer();
$mail->send_html('mynutridiari@moh.gov.my', $to, $subject, $body);
}






$logindate = date('d-m-Y');
$logintime = date('h:i:s');
$user = array("USER_EMAIL" => $email,"USER_PASSWORD" => $password1,"USER_FULLNAME" => $fullname);

$items_array;
$items_array = array( "SENT_DATE" => $logindate,"SENT_TIME" => $logintime,"SENT_COUNT" => $ucount,"STATUS" => $status_data,"USER" => $userdata);

// return the JSON
$return_object=array();
$return_object["login"] = $items_array;
echo json_encode($return_object);
//echo $msg;

?>