<?php header('Content-type: application/json');




$username = $_POST['username'];
$lastsync = (int)$_POST['lastsync'];
$socialdata= json_decode($_POST['socialdata'],true);


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
  		
  		
  		
  		
  		$ucount=0;
  		$socialdate = array();
		$socialtime = array();
		$imagepath = array();
		$question = array();
		$reply = array();
		$username1 = array();
		$socialid2 = array();
		$type = array();
		$updated = array();
		$remotefile = array();
  		

$max = sizeof($socialdata);

for($i = 0; $i < $max;$i++)
{

//execute the SQL query and return records

$result = mysql_query("SELECT * from social where socialid = '". $socialdata[$i]['socialid']."' and reply is not null");


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$socialdate[$ucount] = $row['date'];
		$socialtime[$ucount] = $row['time'];
		$imagepath[$ucount] = $row['imagepath'];
		$question[$ucount] = $row['question'];
		$reply[$ucount] = $row['reply'];
		$username1[$ucount] = $row['username'];
		$socialid2[$ucount] = $row['socialid'];
		$type[$ucount] = $row['type'];
		$updated[$ucount] = $row['updated'];
		$remotefile[$ucount] = $row['remotefile'];
	
		$ucount++;
		}

	}





}		
  

	
$socialcount = $ucount;
    

$status_data = 'DONE';

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$social1data = array();

for ($i = 0; $i < $ucount; $i++) {
	$social1data[$i] = array("REPLY" => $reply[$i],
				"USERNAME" => $username1[$i],
				"SOCIALID" => $socialid2[$i]);
}




$items_array;
$items_array = array("STATUS" => $status_data,"SOCIALDATA" => $social1data);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;

echo json_encode($return_object);





?>