<?php  header('Content-type: application/json');
$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = 'xxxxx';

$msg='';


$email = $_POST['username'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];


	$status ='INIT';
	$ucount = 0;

	$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

	$selected = mysql_select_db("mynutridiariv2",$dbhandle)
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

		$mail = new mailer();
		$mail->send_html('mynutridiari@moh.gov.my', $to, $subject, $body);





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
echo json_encode($return_object);
//echo $msg;


?>
