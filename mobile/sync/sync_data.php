<?php header('Content-type: application/json');



$username = $_POST['username'];
$table = $_POST['table'];
$data= json_decode($_POST['data'],true);


$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$status_data = 'SYNC';

$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';


$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle) 
  		or die("Could not select db");



$max = sizeof($diaridata);

for($i = 0; $i < $max;$i++)
{


if ($table == 'diaridata') {

if ($diaridata[$i]['server_id']!="") {

$sql = "UPDATE  diaridata SET ".
	"id = ".$data[$i]['id'].",".
	"info1 = '".$data[$i]['info1']."',".
	"info2 = '".$data[$i]['info2']."',".
	"info3 = '".$data[$i]['info3']."',".
	"info4 = '".$data[$i]['info4']."',".
	"info5 = '".$data[$i]['info5']."',".
	"diaritime = '".$data[$i]['diaritime']."',".
	"updated = ".$updatedataint." ".
        "WHERE ".
     	"server_id = '".$data[$i]['server_id']."' AND username = '".$username."'";

} else {
$sql = "INSERT INTO diaridata ".
       "(info1,info2,info3,info4,info5,diaridate,diaritime,username,updated,server_id) ".
       "VALUES ".
       "('".$data[$i]['info1']."','".$data[$i]['info2']."','".$data[$i]['info3']."','".$data[$i]['info4']."','".$data[$i]['info5']."','".$data[$i]['diaridate']."','".$data[$i]['diaritime']."','".$username."',".$updatedataint.",UUID())";

}

mysql_select_db($dbname);
$retval = mysql_query( $sql, $dbhandle );
if(! $retval )
{
  //die('Could not enter data: ' . mysql_error());
}


}


} else if ($table == 'cart') {



} else if ($table == 'user') {

}






/*
$dbusername = 'root';
$dbhostname = 'localhost';
$dbname = 'mynutridiariv2';
$dbpassword = 'xxxxx';


$dbhandle = mysql_connect($dbhostname, $dbusername, $dbpassword) 
  		or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$dbhandle) 
  		or die("Could not select db");
 */

//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from diaridata where username = '".$username."'");

		$id = array();
		$type = array();
		$info1 = array();
		$info2 = array();
		$info3 = array();
		$info4 = array();
		$info5 = array();
		$diaridate = array();
		$diaritime = array();
		$username1 = array();
		$updated = array();
		$serverid = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$type[$ucount] = $row['type'];
		$info1[$ucount] = $row['info1'];
		$info2[$ucount] = $row['info2'];
		$info3[$ucount] = $row['info3'];
		$info4[$ucount] = $row['info4'];
		$info5[$ucount] = $row['info5'];
		$diaridate[$ucount] = $row['diaridate'];
		$diaritime[$ucount] = $row['diaritime'];
		$username1[$ucount] = $row['username'];
		$updated[$ucount] = $row['updated'];
		$serverid[$ucount] = $row['server_id'];
	
		$ucount++;
		}

	}
    

$status_data = 'SYNC';

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$data = array();

for ($i = 0; $i < $ucount; $i++) {
	$data[$i] = array("ID" => $id[$i],"TYPE" => $type[$i],"INFO1" => $info1[$i],"INFO2" => $info2[$i],"INFO3" => $info3[$i],"INFO4" => $info4[$i],
				"INFO5" => $info5[$i],
				"DIARIDATE" => $diaridate[$i],
				"DIARITIME" => $diaritime[$i],
				"USERNAME" => $username1[$i],
				"UPDATED" => $updated[$i],
				"SERVER_ID" => $serverid[$i]);
}


$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"TABLE" => "diaridata","DIARIDATA" => $data);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;



?>