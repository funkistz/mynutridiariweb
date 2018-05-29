<?php header('Content-type: application/json');
$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'xxxxx';

$msg='';

$force= (int)$_POST['force'];

$username = $_POST['username'];
$lastsync = (int)$_POST['updated'];
$table = $_POST['table'];

$languageid= $_POST['languageid'];
$dob= $_POST['dob'];
$weight= $_POST['weight'];
$height= $_POST['height'];
$bmi= $_POST['bmi'];
$activitylevel= $_POST['activitylevel'];
$program= $_POST['program'];
$gender= $_POST['gender'];
$needcalorie= $_POST['needcalorie'];

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;



$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if ($force!=1) { 		
$sql = "UPDATE ".$table." SET user_languageid = '".$languageid.
		"',dob = '".$dob.
		"',weight = '".$weight.
		"',height = '".$height.
		"',gender = '".$gender.
		"',activitylevel = '".$activitylevel.
		"',program = '".$program.
		"',needcalorie = '".$needcalorie.
		"',bmi = '".$bmi.
		"',updated = ".$updatedataint.
		",sync = ".$updatedataint.
		" WHERE username = '".$username."' and updated < ".$lastsync ;
} else {
$sql = "UPDATE ".$table." SET user_languageid = '".$languageid.
		"',dob = '".$dob.
		"',weight = '".$weight.
		"',height = '".$height.
		"',gender = '".$gender.
		"',activitylevel = '".$activitylevel.
		"',program = '".$program.
		"',needcalorie = '".$needcalorie.
		"',bmi = '".$bmi.
		"',updated = ".$updatedataint.
		",sync = ".$updatedataint.
		" WHERE username = '".$username."'";
}

$status_data = 'SYNC';

mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  //die('Could not update data: ' . mysql_error());
  $status_data = 'FAILUPDATE';
}
//echo "Updated data successfully\n";
mysql_close($conn);


$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';


$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle) 
  		or die("Could not select db");
  		

//execute the SQL query and return records
$result = mysql_query("SELECT * from ".$table." where username = '".$username."'");

$user_id = array();
$user_fullname = array();
$user_username = array();
$user_languageid = array();
$user_dob = array();
$user_gender = array();
$user_height = array();
$user_weight = array();
$user_bmi = array();
$user_activitylevel = array();
$user_program = array();
$user_needcalorie = array();
$ucount = 0;

	if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$user_id[$ucount] = $row['user_id'];
		$user_fullname[$ucount] = $row['user_fullname'];
		$user_username[$ucount] = $row['username'];
		$user_languageid[$ucount] = $row['user_languageid'];
		$user_dob[$ucount] = $row['dob'];
		$user_gender[$ucount] = $row['gender'];
		$user_height[$ucount] = $row['height'];
		$user_weight[$ucount] = $row['weight'];
		$user_bmi[$ucount] = $row['bmi'];
		$user_activitylevel[$ucount] = $row['activitylevel'];
		$user_program[$ucount] = $row['program'];
		$user_needcalorie[$ucount] = $row['needcalorie'];
	
		$ucount++;
		}

	}
    
	if ($ucount>0) {
		$status_data = 'SYNC';
	} else {
		$status_data = 'NONEWDATA';
	}



$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$data = array();

for ($i = 0; $i < $ucount; $i++) {
	$data[$i] = array("USER_ID" => $user_id[$i],"USER_FULLNAME" => $user_fullname[$i],"USERNAME" => $user_username[$i],
	"USER_LANGUAGEID" => $user_languageid[$i],"USER_DOB" => $user_dob[$i],"USER_GENDER" => $user_gender[$i],"USER_HEIGHT" => $user_height[$i],
	"USER_WEIGHT" => $user_weight[$i],"USER_BMI" => $user_bmi[$i],"USER_ACTIVITYLEVEL" => $user_activitylevel[$i],"USER_PROGRAM" => $user_program[$i],
	"USER_NEEDCALORIE" => $user_needcalorie[$i]);
}

$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"TABLE" => $table,"DATA_INFO" => $data);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;



?>