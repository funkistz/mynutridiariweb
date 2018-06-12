<?php header('Content-type: application/json');
$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = '';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$msg='';


$username = $_POST['username'];

if (isset($_POST["dob"])) {$dob= $_POST['dob'];}else{$dob='';}
if (isset($_POST["weight"])) {$weight= $_POST['weight'];}else{$weight='';}
if (isset($_POST["height"])) {$height= $_POST['height'];}else{$height='';}
if (isset($_POST["bmi"])) {$bmi= $_POST['bmi'];}else{$bmi='';}
if (isset($_POST["activitylevel"])) {$activitylevel= $_POST['activitylevel'];}else{$activitylevel='';}
if (isset($_POST["program"])) {$program= $_POST['program'];}else{$program='';}
if (isset($_POST["gender"])) {$gender= $_POST['gender'];}else{$gender='';}
if (isset($_POST["needcalorie"])) {$needcalorie= $_POST['needcalorie'];}else{$needcalorie='';}

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = '';


$dbhandle = @mysql_connect($dbhostname, $dbusername, $dbpassword)
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle)
  		or die("Could not select db");

$temp = "SELECT * FROM userdata WHERE username = '".$username."'";
$result = mysql_query($temp, $dbhandle);
$num_rows = mysql_num_rows($result);

$test = 0;

if ($num_rows>0) {
	$sql = "UPDATE userdata SET updated = ".$updatedataint.",username = '".$username;

if (($dob!="")&&($dob!=null)) {
	$sql .= "',dob = '".$dob;
	$test = 1;
}

if (($weight!="")&&($weight!=null)) {
	$sql .= "',weight = '".$weight;
	$test = 1;
}

if (($height!="")&&($height!=null)) {
	$sql .= "',height = '".$height;
	$test = 1;
}

if (($gender!="")&&($gender!=null)) {
	$sql .= "',gender = '".$gender;
	$test = 1;
}

if (($activitylevel!="")&&($activitylevel!=null)) {
	$sql .= "',activitylevel = '".$activitylevel;
	$test = 1;
}

if (($program!="")&&($program!=null)) {
	$sql .= "',program = '".$program;
	$test = 1;
}

if (($needcalorie!="")&&($needcalorie!=null)) {
	$sql .= "',needcalorie = '".$needcalorie;
	$test = 1;
}

if (($bmi!="")&&($bmi!=null)) {
	$sql .= "',bmi = '".$bmi;
	$test = 1;
}

$sql .=	"' WHERE username = '".$username."'";

//echo $sql;

} else {

	$sql = "INSERT INTO userdata ".
       "(username,dob,gender,height,weight,bmi,activitylevel,program,needcalorie,updated) ".
       "VALUES ".
       "('".$username."','".$dob."','".$gender."','".$height."','".$weight."','".$bmi."','".$activitylevel."','".$program."','".$needcalorie."',".$updatedataint.")";
	$test = 1;
}


$status_data = 'SYNC';
if ($test == 1) {
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $dbhandle );
	if(! $retval )
	{
  		die('Could not update data: ' . mysql_error());
	}
}

mysql_close($dbhandle);

$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = '';


$dbhandle = @mysql_connect($dbhostname, $dbusername, $dbpassword)
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle)
  		or die("Could not select db");


//execute the SQL query and return records
$result = mysql_query("SELECT * from userdata where username = '".$username."'");

$user_id = array();
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

		$user_id[$ucount] = $row['id'];
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
	$data[$i] = array("USER_ID" => $user_id[$i],
				"USER_DOB" => $user_dob[$i],
				"USER_GENDER" => $user_gender[$i],
				"USER_HEIGHT" => $user_height[$i],
				"USER_WEIGHT" => $user_weight[$i],
				"USER_BMI" => $user_bmi[$i],
				"USER_ACTIVITYLEVEL" => $user_activitylevel[$i],
				"USER_PROGRAM" => $user_program[$i],
				"USER_NEEDCALORIE" => $user_needcalorie[$i]);
}

$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"USER_DATA" => $data);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;

mysql_close($dbhandle);

?>
