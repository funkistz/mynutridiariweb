<?php header('Content-type: application/json');


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



//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from system where status = 1");

		$systemversion = array();
		$contentversion = array();
		$libraryversion = array();
		$messagefrontview = array();
		$messagelogin = array();
		$messagemenu = array();
		$canclickfrontview = array();
		$canclicklogin = array();
		$canclickmenu = array();
		$server1[$ucount] = array();
		$server2[$ucount] = array();

if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$systemversion[$ucount] = $row['system_version'];
		$contentversion[$ucount] = $row['content_version'];
		$libraryversion[$ucount] = $row['library_version'];
		$messagefrontview[$ucount] = $row['message_frontview'];
		$messagelogin[$ucount] = $row['message_login'];
		$messagemenu[$ucount] = $row['message_menu'];
		$canclickfrontview[$ucount] = $row['canclick_frontview'];
		$canclicklogin[$ucount] = $row['canclick_login'];
		$canclickmenu[$ucount] = $row['canclick_menu'];
		$server1[$ucount] = $row['server1'];
		$server2[$ucount] = $row['server2'];
	
		$ucount++;
		}

	}

$systemcount = $ucount;
    

$status_data = 'DONE';

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$systemdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$systemdata[$i] = array("SYSTEM_VERSION" => $systemversion[$i],
				"CONTENT_VERSION" => $contentversion[$i],
				"LIBRARY_VERSION" => $libraryversion[$i],
				"MESSAGE_FRONTVIEW" => $messagefrontview[$i],
				"MESSAGE_LOGIN" => $messagelogin[$i],
				"MESSAGE_MENU" => $messagemenu[$i],
				"CANCLICK_FRONTVIEW" => $canclickfrontview[$i],
				"CANCLICK_LOGIN" => $canclicklogin[$i],
				"CANCLICK_MENU" => $canclickmenu[$i],
				"SERVER1" => $server1[$i],
				"SERVER2" => $server2[$i]);
				
}







$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"SYSTEM_COUNT" => $systemcount,"SYSTEM_INFO" => $systemdata);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;



?>