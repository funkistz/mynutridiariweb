<?php header('Content-type: application/json');
$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = 'xxxxx';

$msg='';
if((!empty($_POST['email']) && isset($_POST['email'])) && (!empty($_POST['password']) && isset($_POST['password'])))
{
// username  sent from form

$email = $_POST['email'];
$password = $_POST['password'];

	
	$fullname ='';
	$activation =0;
	$ucount = 0;

	$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

	$selected = mysql_select_db("mynutridiariv2",$dbhandle) 
  		or die("Could not select db");

	//execute the SQL query and return records
	$result = mysql_query("SELECT * from users where email='".$email."' and password = '".$password."'");

	if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$fullname = $row['fullname'];
		$activation = (int)$row['status'];
	
		$ucount++;
		}

	}
    
	if ($ucount==1) {
		if ($activation == 1) {
			$msg= "Login Successful.";
			$status_data = 'LOGINSUCCESS';
		} else {
			$msg= "Not Activated.";
			$status_data = 'NOTACTIVATED';
		}
	} else if ($ucount>1) {
		$msg= 'More than 1 user found. Admin has to check.'; 
		$status_data = 'LOGINFAIL';
	} else {
		$msg= 'No user found.  Please check email or username entered.'; 
		$status_data = 'LOGINFAIL';
	}


}
$logindate = date('d-m-Y');
$logintime = date('h:i:s');
$user = array("USER_EMAIL" => $email,"USER_PASSWORD" => $password,"USER_FULLNAME" => $fullname);

$items_array;
$items_array = array( "LOGIN_DATE" => $logindate,"LOGIN_TIME" => $logintime,"STATUS" => $status_data,"USER_INFO" => $user);

// return the JSON
$return_object=array();
$return_object["login"] = $items_array;
echo json_encode($return_object);
//echo $msg;


?>