<?php header('Content-type: application/json');


$force= (int)$_POST['force'];

$username = $_POST['username'];
$table = $_POST['table'];

$cartdata= json_decode($_POST['cartdata'],true);


$file = 'people.txt';

$current = $_POST['cartdata'];
// Write the contents back to the file
file_put_contents($file, $current);



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



$max = sizeof($cartdata);

for($i = 0; $i < $max;$i++)
{


if ($cartdata[$i]['server_id']!="") {

$sql = "UPDATE  cart SET ".
	"id = ".$cartdata[$i]['id'].",".
	"info1 = '".$cartdata[$i]['info1']."',".
	"info2 = '".$cartdata[$i]['info2']."',".
	"info3 = '".$cartdata[$i]['info3']."',".
	"info4 = '".$cartdata[$i]['info4']."',".
	"info5 = '".$cartdata[$i]['info5']."',".
	"info6 = '".$cartdata[$i]['info6']."',".
	"info7 = '".$cartdata[$i]['info7']."',".
	"info8 = '".$cartdata[$i]['info8']."',".
	"info9 = '".$cartdata[$i]['info9']."',".
	"info10 = '".$cartdata[$i]['info10']."',".
	"info11 = '".$cartdata[$i]['info11']."',".
	"info12 = '".$cartdata[$i]['info12']."',".
	"info13 = '".$cartdata[$i]['info13']."',".
	"info14 = '".$cartdata[$i]['info14']."',".
	"info15 = '".$cartdata[$i]['info15']."',".
	"info16 = '".$cartdata[$i]['info16']."',".
	"info17 = '".$cartdata[$i]['info17']."',".
	"info18 = '".$cartdata[$i]['info18']."',".
	"info19 = '".$cartdata[$i]['info19']."',".
	"info20 = '".$cartdata[$i]['info20']."',".
	"cartdate = '".$cartdata[$i]['cartdate']."',".
	"updated = ".$updatedataint." ".
        "WHERE ".
     	"server_id = '".$cartdata[$i]['server_id']."'  AND username = '".$username."'";

} else {
$sql = "INSERT INTO cart ".
       "(info1,info2,info3,info4,info5,info6,info7,info8,info9,info10,info11,info12,info13,info14,info15,info16,info17,info18,info19,info20,cartdate,username,updated,server_id) ".
       "VALUES ".
       "('".$cartdata[$i]['info1']."','".$cartdata[$i]['info2']."','".$cartdata[$i]['info3']."','".$cartdata[$i]['info4']."','".$cartdata[$i]['info5']."','".$cartdata[$i]['info6']."','".$cartdata[$i]['info7']."','".$cartdata[$i]['info8']."','".$cartdata[$i]['info9']."','".$cartdata[$i]['info10']."','".$cartdata[$i]['info11']."','".$cartdata[$i]['info12']."','".$cartdata[$i]['info13'].",'".$cartdata[$i]['info14']."'','".$cartdata[$i]['info15']."','".$cartdata[$i]['info16']."','".$cartdata[$i]['info17']."','".$cartdata[$i]['info18']."','".$cartdata[$i]['info19']."','".$cartdata[$i]['info20']."','".$cartdata[$i]['cartdate']."','".$username."',".$updatedataint.",UUID())";

}

mysql_select_db($dbname);
$retval = mysql_query( $sql, $dbhandle );
if(! $retval )
{
  //die('Could not enter data: ' . mysql_error());
}


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

$result = mysql_query("SELECT * from cart where username = '".$username."'");

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
		$cartdate = array();
		$username1 = array();
		$updated = array();
		$serverid = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$info1[$ucount] = $row['info1'];
		$info2[$ucount] = $row['info2'];
		$info3[$ucount] = $row['info3'];
		$info4[$ucount] = $row['info4'];
		$info5[$ucount] = $row['info5'];
		$info6[$ucount] = $row['info6'];
		$info7[$ucount] = $row['info7'];
		$info8[$ucount] = $row['info8'];
		$info9[$ucount] = $row['info9'];
		$info10[$ucount] = $row['info10'];
		$info11[$ucount] = $row['info11'];
		$info12[$ucount] = $row['info12'];
		$info13[$ucount] = $row['info13'];
		$info14[$ucount] = $row['info14'];
		$info15[$ucount] = $row['info15'];
		$info16[$ucount] = $row['info16'];
		$info17[$ucount] = $row['info17'];
		$info18[$ucount] = $row['info18'];
		$info19[$ucount] = $row['info19'];
		$info20[$ucount] = $row['info20'];
		$cartdate[$ucount] = $row['cartdate'];
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
	$data[$i] = array("ID" => $id[$i],
				"INFO1" => $info1[$i],
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
				"CARTDATE" => $cartdate[$i],
				"USERNAME" => $username1[$i],
				"UPDATED" => $updated[$i],
				"SERVER_ID" => $serverid[$i]);
}


$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"TABLE" => "cart","CARTDATA" => $data);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;





?>