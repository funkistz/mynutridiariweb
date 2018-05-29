<?php header('Content-type: application/json');
$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'xxxxx';

$msg='';


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






$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"TABLE" => $table);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;


?>