<?php header('Content-type: application/json');

$username = $_POST['username'];

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;





$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';


$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle) 
  		or die("Could not select db");
  		

//execute the SQL query and return records
$result = mysql_query("SELECT * from userdata where username = '".$username."'");

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
	
		$user_username[$ucount] = $row['username'];
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

$userdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$userdata[$i] = array(	"USERNAME" => $user_username[$i],
				"USER_DOB" => $user_dob[$i],
				"USER_GENDER" => $user_gender[$i],
				"USER_HEIGHT" => $user_height[$i],
				"USER_WEIGHT" => $user_weight[$i],
				"USER_BMI" => $user_bmi[$i],
				"USER_ACTIVITYLEVEL" => $user_activitylevel[$i],
				"USER_PROGRAM" => $user_program[$i],
				"USER_NEEDCALORIE" => $user_needcalorie[$i]);
}

$ucount = 0;

$result = mysql_query("SELECT * from diaridata where username = '".$username."'");


		$id = array();
		$info1 = array();
		$info2 = array();
		$info3 = array();
		$info4 = array();
		$info5 = array();
		$info6 = array();
		$info7 = array();
		$info8 = array();
		$info9 = array();
		$info10 = array();
		$info11 = array();
		$serverid = array();


	if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$info1[$ucount] = $row['type'];
		$info2[$ucount] = $row['info1'];
		$info3[$ucount] = $row['info2'];
		$info4[$ucount] = $row['info3'];
		$info5[$ucount] = $row['info4'];
		$info6[$ucount] = $row['info5'];
		$info7[$ucount] = $row['diaridate'];
		$info8[$ucount] = $row['diaritime'];
		$info9[$ucount] = $row['username'];
		$info10[$ucount] = $row['updated'];
		$info11[$ucount] = $row['diaridatevalue'];
		$serverid[$ucount] = $row['server_id'];
	
		$ucount++;
		}

	}
	
$diaridata = array();

for ($i = 0; $i < $ucount; $i++) {
	$diaridata[$i] = array(	"TYPE" => $info1[$i],
				"INFO2" => $info2[$i],
				"INFO3" => $info3[$i],
				"INFO4" => $info4[$i],
				"INFO5" => $info5[$i],
				"INFO6" => $info6[$i],
				"DIARI_DATE" => $info7[$i],
				"DIARI_TIME" => $info8[$i],
				"USERNAME" => $info9[$i],
				"UPDATED" => $info10[$i],
				"DIARIDATEVALUE" => $info11[$i],
				"SERVER_ID" => $serverid[$i]);
}

$ucount = 0;

$result = mysql_query("SELECT * from cart where username = '".$username."' and deleted = 0");

		$id = array();
		$info1 = array();
		$info2 = array();
		$info3 = array();
		$info4 = array();
		$info5 = array();
		$info6 = array();
		$info7 = array();
		$info8 = array();
		$info9 = array();
		$info10 = array();
		$info11 = array();
		$info12 = array();
		$info13 = array();
		$info14 = array();
		$info15 = array();
		$info16 = array();
		$info17 = array();
		$info18 = array();
		$info19 = array();
		$info20 = array();
		$info21 = array();
		$info22 = array();
		$info23 = array();
		$info24 = array();
		$info25 = array();
		$serverid = array();


	if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$info1[$ucount] = $row['type'];
		$info2[$ucount] = $row['info1'];
		$info3[$ucount] = $row['info2'];
		$info4[$ucount] = $row['info3'];
		$info5[$ucount] = $row['info4'];
		$info6[$ucount] = $row['info5'];
		$info7[$ucount] = $row['info6'];
		$info8[$ucount] = $row['info7'];
		$info9[$ucount] = $row['info8'];
		$info10[$ucount] = $row['info8'];
		$info11[$ucount] = $row['info10'];
		$info12[$ucount] = $row['info11'];
		$info13[$ucount] = $row['info12'];
		$info14[$ucount] = $row['info13'];
		$info15[$ucount] = $row['info14'];
		$info16[$ucount] = $row['info15'];
		$info17[$ucount] = $row['info16'];
		$info18[$ucount] = $row['info17'];
		$info19[$ucount] = $row['info18'];
		$info20[$ucount] = $row['info19'];
		$info21[$ucount] = $row['info20'];
		$info22[$ucount] = $row['cartdate'];
		$info23[$ucount] = $row['username'];
		$info24[$ucount] = $row['updated'];
		$info25[$ucount] = '';
		$serverid[$ucount] = $row['server_id'];
	
		$ucount++;
		}

	}
    


$cartdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$cartdata[$i] = array(	"TYPE" => $info1[$i],
				"INFO2" => $info2[$i],
				"INFO3" => $info3[$i],
				"INFO4" => $info4[$i],
				"INFO5" => $info5[$i],
				"INFO6" => $info6[$i],
				"INFO7" => $info7[$i],
				"INFO8" => $info8[$i],
				"INFO9" => $info9[$i],
				"INFO10" => $info10[$i],
				"INFO11" => $info11[$i],
				"INFO12" => $info12[$i],
				"INFO13" => $info13[$i],
				"INFO14" => $info14[$i],
				"INFO15" => $info15[$i],
				"INFO16" => $info16[$i],
				"INFO17" => $info17[$i],
				"INFO18" => $info18[$i],
				"INFO19" => $info19[$i],
				"INFO20" => $info20[$i],
				"INFO21" => $info21[$i],
				"CARTDATE" => $info22[$i],
				"USERNAME" => $info23[$i],
				"UPDATED" => $info24[$i],
				"INFO25" => $info25[$i],
				"SERVER_ID" => $serverid[$i]);
}






$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"USER_DATA" => $userdata,"DIARI_DATA" => $diaridata,"CART_DATA" => $cartdata);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;



?>