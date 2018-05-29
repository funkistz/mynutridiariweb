<?php  header('Content-type: application/json');
error_reporting(E_ERROR);
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
	
		$ucount++;
		}

	}
    
	if ($ucount==1) {
		// sending email
		include 'smtp/send_mail.php';
		$to=$email;
		$subject="Password Retrieval";

		$body='Hi '.$fullname.', <br/> <br/> This is an email from <strong>MyNutriDiari</strong> <br/> <br/> You received this email because you forgotten your pasword and requested to retrieve it.  If you did not do so, please ignore this email.  <br/> <br/><strong>Your login credentials to the MyNutriDiari are as follows;</strong> <br/> USERNAME : '.$email.'<br/>PASSWORD : '.$password.'<br/> <br/> Thank you. <br/> <br/> NUTRITION DIVISION<br/> MINISTRY OF HEALTH MALAYSIA';
		Send_Mail($to,$subject,$body);
		$msg= "Retrieve successful. Please check email.";
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