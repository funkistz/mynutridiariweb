<?php header('Content-type: application/json');
error_reporting(E_ERROR);


$username = $_POST['username'];
$table = $_POST['table'];
$action = $_POST['action'];
if (isset($_POST["info1"])) {$info1 = $_POST['info1'];}else{$info1='';}
if (isset($_POST["info2"])) {$info2 = $_POST['info2'];}else{$info2='';}
if (isset($_POST["info3"])) {$info3 = $_POST['info3'];}else{$info3='';}
if (isset($_POST["info4"])) {$info4 = $_POST['info4'];}else{$info4='';}
if (isset($_POST["info5"])) {$info5 = $_POST['info5'];}else{$info5='';}
if (isset($_POST["info6"])) {$info6 = $_POST['info6'];}else{$info6='';}
if (isset($_POST["info7"])) {$info7 = $_POST['info7'];}else{$info7='';}
if (isset($_POST["info8"])) {$info8 = $_POST['info8'];}else{$info8='';}
if (isset($_POST["info9"])) {$info9 = $_POST['info9'];}else{$info9='';}
if (isset($_POST["info10"])) {$info10 = $_POST['info10'];}else{$info10='';}
if (isset($_POST["info11"])) {$info11 = $_POST['info11'];}else{$info11='';}
if (isset($_POST["info12"])) {$info12 = $_POST['info12'];}else{$info12='';}
if (isset($_POST["info13"])) {$info13 = $_POST['info13'];}else{$info13='';}
if (isset($_POST["info14"])) {$info14 = $_POST['info14'];}else{$info14='';}
if (isset($_POST["info15"])) {$info15 = $_POST['info15'];}else{$info15='';}
if (isset($_POST["info16"])) {$info16 = $_POST['info16'];}else{$info16='';}
if (isset($_POST["info17"])) {$info17 = $_POST['info17'];}else{$info17='';}
if (isset($_POST["info18"])) {$info18 = $_POST['info18'];}else{$info18='';}
if (isset($_POST["info19"])) {$info19 = $_POST['info19'];}else{$info19='';}
if (isset($_POST["info20"])) {$info20 = $_POST['info20'];}else{$info20='';}
if (isset($_POST["info21"])) {$info21 = $_POST['info21'];}else{$info21='';}
if (isset($_POST["info22"])) {$info22 = $_POST['info22'];}else{$info22='';}
if (isset($_POST["info23"])) {$info23 = $_POST['info23'];}else{$info23='';}
if (isset($_POST["info24"])) {$info24 = $_POST['info24'];}else{$info24='';}
if (isset($_POST["info25"])) {$info25 = $_POST['info25'];}else{$info25='';}
if (isset($_POST["setdate"])) {$setdate = $_POST['setdate'];}else{$setdate='';}
if (isset($_POST["server_id"])) {$server_id = $_POST['server_id'];}else{$info1='';}



$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$status_data = 'INIT';

$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';


$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle) 
  		or die("Could not select db");

if ($table=="diaridata") {
$temp = "SELECT * FROM diaridata WHERE diaridate = '".$info7."' and username = '".$username."'";  		
$result = mysql_query($temp, $dbhandle);
$num_rows = mysql_num_rows($result);

	if ($num_rows>0) {
		$action = 'update';
	}
}



if ($table=="diaridata") {

	if ($action=="update") {

	$sql = "UPDATE  diaridata SET type = '".$info1."'";
	
	if ($info2!="") {
		$sql .= ",info1 = '".$info2."'";
	}
	if ($info3!="") {
		$sql .= ",info2 = '".$info3."'";
	}
	if ($info4!="") {
		$sql .= ",info3 = '".$info4."'";
	}
	if ($info5!="") {
		$sql .= ",info4 = '".$info5."'";
	}
	if ($info6!="") {
		$sql .= ",info5 = '".$info6."'";
	}

	$sql .= ",updated = ".$updatedataint." WHERE username = '".$username."' and ";
	
	if ($server_id!="") {
		$sql .= "server_id = '".$server_id."'";
	} else {
		$sql .= "diaridate = '".$info7."'";
	}

	} else if ($action=="insert") {
	
	$sql = "INSERT INTO diaridata ".
       "(type,info1,info2,info3,info4,info5,diaridate,diaritime,username,diaridatevalue,updated,server_id) ".
       "VALUES ".
       "('".$info1."','".$info2."','".$info3."','".$info4."','".$info5."','".$info6."','".$setdate."','".$synctime."','".$username."','".$info10."',".$updatedataint.",UUID())";

	}

	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $dbhandle );
	if ($action=="insert") {
		$lastid = mysql_insert_id();
	} 
	if(! $retval )	
	{
  		die($sql);
	}








	//execute the SQL query and return records
	$ucount=0;
	if ($action == "insert") {
		$result = mysql_query("SELECT * from diaridata where diaridata_id = ".$lastid);
	} else if ($action == "update") {
		if ($server_id!='') {
			$result = mysql_query("SELECT * from diaridata where server_id = '".$server_id."'");
		} else  {
			$result = mysql_query("SELECT * from diaridata where diaridate = '".$info7."'");
		}
	}

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
    
} else if ($table=="cart") {

	if (($action=="update")&&($server_id!='')) {

	$sql = "UPDATE  cart SET ".
	"type = '".$info1."',".
	"info1 = '".$info2."',".
	"info2 = '".$info3."',".
	"info3 = '".$info4."',".
	"info4 = '".$info5."',".
	"info5 = '".$info6."',".
	"info6 = '".$info7."',".
	"info7 = '".$info8."',".
	"info8 = '".$info9."',".
	"info9 = '".$info10."',".
	"info10 = '".$info11."',".
	"info11 = '".$info12."',".
	"info12 = '".$info13."',".
	"info13 = '".$info14."',".
	"info14 = '".$info15."',".
	"info15 = '".$info16."',".
	"info16 = '".$info17."',".
	"info17 = '".$info18."',".
	"info18 = '".$info19."',".
	"info19 = '".$info20."',".
	"info20 = '".$info21."',".
	"cartdate = '".$info22."',".
	"updated = ".$updatedataint." ".
        "WHERE ".
     	"server_id = '".$server_id."'";

	} else if (($action=="delete")&&($server_id!='')) {

	$sql = "UPDATE  cart SET ".
	"deleted = 1 ".
        "WHERE ".
     	"server_id = '".$server_id."'";

	} else if ($action=="insert") {
	$sql = "INSERT INTO cart ".
       "(type,info1,info2,info3,info4,info5,info6,info7,info8,info9,info10,info11,info12,info13,info14,info15,info16,info17,info18,info19,info20,cartdate,username,updated,server_id) ".
       "VALUES ".
       "('".$info1."','".$info2."','".$info3."','".$info4."','".$info5."','".$info6."','".$info7."','".$info8."','".$info9."','".$info10."','".$info11."','".$info12."','".$info13."','".$info14."','".$info15."','".$info16."','".$info17."','".$info18."','".$info19."','".$info20."','".$info21."','".$setdate."','".$username."',".$updatedataint.",UUID())";

	}

	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $dbhandle );
	if ($action=="insert") {
		$lastid = mysql_insert_id();
	} 
	if(! $retval )
	{
  		die('Could not enter data: ' . mysql_error());
	}








	//execute the SQL query and return records
	$ucount=0;
	if ($action == "insert") {
		$result = mysql_query("SELECT * from cart where id = ".$lastid);
	} else if ($action == "update") {
		$result = mysql_query("SELECT * from cart where server_id = '".$server_id."'");
	} else if (($action == "delete")&&($server_id!= "")) {
		$result = mysql_query("SELECT * from cart where server_id = '".$server_id."'");
	}

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
    
}





$status_data = 'SYNC';

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$data = array();

for ($i = 0; $i < $ucount; $i++) {
	$data[$i] = array(	"INFO1" => $info1[$i],
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
				"INFO22" => $info22[$i],
				"INFO23" => $info23[$i],
				"INFO24" => $info24[$i],
				"INFO25" => $info25[$i],
				"SERVER_ID" => $serverid[$i]);
}




$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"TABLE" => $table,"DATA" => $data);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;



?>