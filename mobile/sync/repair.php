<?php header('Content-type: application/json');
error_reporting(E_ERROR);






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
  		
  		
  		
$sql = '';

$result = mysql_query("SELECT * from diaridata where diaridatevalue <0");
$diaridataid = array();
$diaridate = array();
$ucount = 0;

	if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
		
		$diaridataid[$ucount] = $row['diaridata_id'];
		$diaridate[$ucount] = $row['diaridate'];
		
		$tddv = DateTime::createFromFormat('d-m-Y', $diaridate[$ucount])->format('Ymd');
				$sql = "UPDATE  diaridata SET ".
				"diaridatevalue = ".$tddv." ".
        			"WHERE ".
     				"diaridata_id = ".$diaridataid[$ucount];	
mysql_select_db($dbname);
$retval = mysql_query( $sql, $dbhandle );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error().':'.$sql);
}
	
		$ucount++;
		}

	}
  		


	
			







echo "done";






?>