<?php header('Content-type: application/json');
error_reporting(E_ERROR);


$username = $_POST['username'];
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
  		
$sql = '';
  		
$max = sizeof($data);

for($i = 0; $i < $max;$i++)
{

$sql2 = "INSERT INTO received ".
       	"(dbtable,username,subject,content1,content2,content3,content4,content5,date,updated,receiveddate) ".
       	"VALUES ".
       	"('".$data[$i]['dbtable']."','".$data[$i]['username']."','".$data[$i]['subject']."','".$data[$i]['content1']."','".$data[$i]['content2']."','".$data[$i]['content3']."','".$data[$i]['content4']."','".$data[$i]['content5']."','".$data[$i]['date']."',".$updatedataint.",'".$syncdate."')";

mysql_select_db($dbname);
$retval = mysql_query( $sql2, $dbhandle );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error().$sql2);
}




	if ($data[$i]['dbtable']=="user") { 
		$temp = "SELECT * FROM userdata WHERE username = '".$username."'";  		
		$result = mysql_query($temp, $dbhandle);
		$num_rows = mysql_num_rows($result);
		$rowcount = (int)$num_rows;
		if ($data[$i]['subject']=="dob") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"dob = '".$data[$i]['content1']."' ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO userdata ".
       				"(username,dob,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		} else if ($data[$i]['subject']=="gender") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"gender = ".$data[$i]['content1']." ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO userdata ".
       				"(username,gender,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		} else if ($data[$i]['subject']=="weight") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"weight = ".$data[$i]['content1']." ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO userdata ".
       				"(username,weight,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		} else if ($data[$i]['subject']=="height") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"height = ".$data[$i]['content1']." ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO height ".
       				"(username,needcalorie,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		} else if ($data[$i]['subject']=="bmi") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"bmi = ".$data[$i]['content1']." ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO bmi ".
       				"(username,needcalorie,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		} else if ($data[$i]['subject']=="activitylevel") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"activitylevel = ".$data[$i]['content1']." ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO userdata ".
       				"(username,activitylevel,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		} else if ($data[$i]['subject']=="program") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"program = ".$data[$i]['content1']." ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO userdata ".
       				"(username,program,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		} else if ($data[$i]['subject']=="needcalorie") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  userdata SET ".
				"needcalorie = ".$data[$i]['content1']." ".
        			"WHERE ".
     				"username = '".$username."'";	
			} else {
				$sql = "INSERT INTO userdata ".
       				"(username,needcalorie,updated) ".
       				"VALUES ".
       				"('".$username."','".$data[$i]['content1']."',".$updatedataint.")";

			}
		}
		

	} else if ($data[$i]['dbtable']=="diaridata") { 
		$temp = "SELECT * FROM diaridata WHERE username = '".$username."' and type ='CALORIE' and diaridate ='".$data[$i]['date']."'";  		
		$result = mysql_query($temp, $dbhandle);
		$num_rows = mysql_num_rows($result);
		$rowcount = (int)$num_rows;
		if ($data[$i]['subject']=="consume1") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  diaridata SET ".
				"info1 = ".$data[$i]['content1'].",".
				"info2 = ".$data[$i]['content2'].",".
				"info3 = ".$data[$i]['content3'].",".
				"info4 = ".$data[$i]['content4'].",".
				"info5 = ".$data[$i]['content5'].
        			" WHERE ".
     				"username = '".$username."' and type = 'CALORIE' and  diaridate ='".$data[$i]['date']."'";	
			} else {
				$tddv = DateTime::createFromFormat('d-m-Y', $data[$i]['date'])->format('Ymd');
				$ddv = idate('Ymd', $tddv);
				$sql = "INSERT INTO diaridata ".
       				"(type,info1,info2,info3,info4,info5,diaridate,username,diaridatevalue,updated,server_id) ".
       				"VALUES ".
       				"('CALORIE','".$data[$i]['content1']."','".$data[$i]['content2']."','".$data[$i]['content3']."','".$data[$i]['content4']."','".$data[$i]['content5']."','".$data[$i]['date']."','".$username."',".$tddv.",".$updatedataint.",UUID())";

			
			}
		} else if ($data[$i]['subject']=="consume2") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  diaridata SET ".
				"info2 = ".$data[$i]['content1'].",".
				"info3 = ".$data[$i]['content2'].
        			" WHERE ".
     				"username = '".$username."' and type = 'CALORIE' and  diaridate ='".$data[$i]['date']."'";	
			} else {
				$tddv = DateTime::createFromFormat('d-m-Y', $data[$i]['date'])->format('Ymd');
				$ddv = idate('Ymd', $tddv);
				$sql = "INSERT INTO diaridata ".
       				"(type,info2,info3,diaridate,username,diaridatevalue,updated,server_id) ".
       				"VALUES ".
       				"('CALORIE','".$data[$i]['content1']."','".$data[$i]['content2']."','".$data[$i]['date']."','".$username."',".$tddv.",".$updatedataint.",UUID())";

			
			}
		} else if ($data[$i]['subject']=="exercise") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  diaridata SET ".
				"info4 = ".$data[$i]['content1'].
        			" WHERE ".
     				"username = '".$username."' and type = 'CALORIE' and  diaridate ='".$data[$i]['date']."'";	
			} else {
				$tddv = DateTime::createFromFormat('d-m-Y', $data[$i]['date'])->format('Ymd');
				$ddv = idate('Ymd', $tddv);
				$sql = "INSERT INTO diaridata ".
       				"(type,info4,diaridate,username,diaridatevalue,updated,server_id) ".
       				"VALUES ".
       				"('CALORIE','".$data[$i]['content1']."','".$data[$i]['date']."','".$username."',".$tddv.",".$updatedataint.",UUID())";

			
			}
		} else if ($data[$i]['subject']=="water") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  diaridata SET ".
				"info5 = ".$data[$i]['content1'].
        			" WHERE ".
     				"username = '".$username."' and type = 'CALORIE' and  diaridate ='".$data[$i]['date']."'";	
			} else {
				$tddv = DateTime::createFromFormat('d-m-Y', $data[$i]['date'])->format('Ymd');
				$ddv = idate('Ymd', $tddv);
				$sql = "INSERT INTO diaridata ".
       				"(type,info5,diaridate,username,diaridatevalue,updated,server_id) ".
       				"VALUES ".
       				"('CALORIE','".$data[$i]['content1']."','".$data[$i]['date']."','".$username."',".$tddv.",".$updatedataint.",UUID())";

			
			}
		} 
		
		
		$temp = "SELECT * FROM diaridata WHERE username = '".$username."' and type ='WEIGHT' and diaridate ='".$data[$i]['date']."'";  		
		$result = mysql_query($temp, $dbhandle);
		$num_rows = mysql_num_rows($result);
		$rowcount = (int)$num_rows;
		
		if ($data[$i]['subject']=="weight") { 
			if ($rowcount > 0) {
				$sql = "UPDATE  diaridata SET ".
				"info1 = ".$data[$i]['content1'].",".
				"info2 = ".$data[$i]['content2'].",".
				"info3 = ".$data[$i]['content3'].
        			" WHERE ".
     				"username = '".$username."' and type = 'WEIGHT' and  diaridate ='".$data[$i]['date']."'";	
			} else {
				$tddv = DateTime::createFromFormat('d-m-Y', $data[$i]['date'])->format('Ymd');
				$ddv = idate('Ymd', $tddv);
				$sql = "INSERT INTO diaridata ".
       				"(type,info1,info2,info3,diaridate,username,diaridatevalue,updated,server_id) ".
       				"VALUES ".
       				"('WEIGHT','".$data[$i]['content1']."','".$data[$i]['content2']."','".$data[$i]['content3']."','".$data[$i]['date']."','".$username."',".$tddv.",".$updatedataint.",UUID())";

			
			}
		}
	
	} else if ($data[$i]['dbtable']=="cart") { 
		
		if ($data[$i]['subject']=="addfood") { 
			$cartcount = 0;
			$temp = "SELECT * FROM cart WHERE username = '".$username."' and info1 ='".$data[$i]['content1']."' and type = 'FOODCART' and info6 = '".$data[$i]['content4']."' and cartdate ='".$data[$i]['date']."'";  		
			$result = mysql_query($temp, $dbhandle);
			$num_rows = mysql_num_rows($result);
			$cartcount = (int)$num_rows;
			if ($cartcount===0) {
			$sql = "INSERT INTO cart ".
       				"(type,info1,info2,info5,info6,info7,cartdate,username,updated,server_id) ".
       				"VALUES ".
       				"('FOODCART','".$data[$i]['content1']."','".$data[$i]['content2']."','".$data[$i]['content3']."','".$data[$i]['content4']."','".$data[$i]['content5']."','".$data[$i]['date']."','".$username."',".$updatedataint.",UUID())";
			}
		} else if ($data[$i]['subject']=="deletefood") { 
			$sql = "UPDATE  cart SET ".
				"info7 = ".$data[$i]['content5'].",".
				"deleted = 1 ".
        			" WHERE ".
     				"username = '".$username."' and info1 = '".$data[$i]['content1']."' and type = 'FOODCART' and info6 = '".$data[$i]['content4']."' and  cartdate ='".$data[$i]['date']."'";	
			
		}
			
	
	}


if ($sql!='') {
//echo $sql.'\n';

mysql_select_db($dbname);
$retval = mysql_query( $sql, $dbhandle );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error().':'.$sql);
}

}

}

$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"STATUS" => $status_data,"USERNAME" => $username);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;



?>