<?php  header('Content-type: application/json');
error_reporting(E_ERROR);
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