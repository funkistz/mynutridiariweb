<?php header('Content-type: application/json');




$username = $_POST['username'];
$lastsync = (int)$_POST['lastsync'];


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
$result = mysql_query("SELECT * from food_malaysia where updated > ".$lastsync);

		$id = array();
		$fmname = array();
		$fminfo = array();
		$fmmeasurement = array();
		$fmweight = array();
		$fmcalorie = array();
		$fmcarbo = array();
		$fmprotein = array();
		$fmfat = array();
		$fmcholesterol = array();
		$fmsugar = array();
		$fmsalt = array();
		$fmtype = array();
		$fmcalorielevel = array();
		$fmicon = array();
		$updated = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$fmname[$ucount] = $row['food_name'];
		$fminfo[$ucount] = $row['food_info'];
		$fmmeasurement[$ucount] = $row['food_measurement'];
		$fmweight[$ucount] = $row['food_weight'];
		$fmcalorie[$ucount] = $row['food_calorie'];
		$fmcarbo[$ucount] = $row['food_carbo'];
		$fmprotein[$ucount] = $row['food_protein'];
		$fmfat[$ucount] = $row['food_fat'];
		$fmcholesterol[$ucount] = $row['food_cholesterol'];
		$fmsugar[$ucount] = $row['food_sugar'];
		$fmsalt[$ucount] = $row['food_salt'];
		$fmtype[$ucount] = $row['food_type'];
		$fmcalorielevel[$ucount] = $row['food_calorie_level'];
		$fmicon[$ucount] = $row['food_icon'];
		$updated[$ucount] = $row['updated'];
		$serverid[$ucount] = $row['server_id'];
	
		$ucount++;
		}

	}
   
$foodcount = $ucount; 

$status_data = 'DONE';

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$fmdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$fmdata[$i] = array("ID" => $id[$i],
				"FOOD_NAME" => $fmname[$i],
				"FOOD_INFO" => $fminfo[$i],
				"FOOD_MEASUREMENT" => $fmmeasurement[$i],
				"FOOD_WEIGHT" => $fmweight[$i],
				"FOOD_CALORIE" => $fmcalorie[$i],
				"FOOD_CARBOHYDRATE" => $fmcarbo[$i],
				"FOOD_PROTEIN" => $fmprotein[$i],
				"FOOD_FAT" => $fmfat[$i],
				"FOOD_CHOLESTEROL" => $fmcholesterol[$i],
				"FOOD_SUGAR" => $fmsugar[$i],
				"FOOD_SALT" => $fmsalt[$i],
				"FOOD_TYPE" => $fmtype[$i],
				"FOOD_CALORIELEVEL" => $fmcalorielevel[$i],
				"FOOD_ICON" => $fmicon[$i],
				"UPDATED" => $updated[$i],
				"SERVER_ID" => $serverid[$i]);
				
}



//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from food_moh where updated > ".$lastsync);

		$id = array();
		$prname = array();
		$prbarcode = array();
		$prplacebought = array();
		$prmanufacturer = array();
		$pringredients = array();
		$prmeasurement = array();
		$prweight = array();
		$prcalories = array();
		$prcarbohydrate = array();
		$prprotein = array();
		$prfat = array();
		$prmufa = array();
		$prpufa = array();
		$prcholesterol = array();
		$prsat = array();
		$prtrans = array();
		$prfiber = array();
		$prsugar = array();
		$prsodium = array();
		$prvita = array();
		$prvitc = array();
		$prcalcium = array();
		$priron = array();
		$prdate = array();
		$updated = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$prname[$ucount] = $row['NAME'];
		$prbarcode[$ucount] = $row['BARCODE'];
		$prplacebought[$ucount] = $row['PLACE_BOUGHT'];
		$prmanufacturer[$ucount] = $row['MANUFACTURER'];
		$pringredients[$ucount] = $row['INGREDIENTS'];
		$prmeasurement[$ucount] = $row['MEASUREMENT'];
		$prweight[$ucount] = $row['WEIGHT'];
		$prcalories[$ucount] = $row['CALORIES'];
		$prcarbohydrate[$ucount] = $row['CARBOHYDRATE'];
		$prprotein[$ucount] = $row['PROTEIN'];
		$prfat[$ucount] = $row['FAT'];
		$prmufa[$ucount] = $row['MUFA'];
		$prpufa[$ucount] = $row['PUFA'];
		$prcholesterol[$ucount] = $row['CHOLESTEROL'];
		$prsat[$ucount] = $row['SAT'];
		$prtrans[$ucount] = $row['TRANS'];
		$prfiber[$ucount] = $row['FIBER'];
		$prsugar[$ucount] = $row['SUGAR'];
		$prsodium[$ucount] = $row['SODIUM'];
		$prvita[$ucount] = $row['VITA'];
		$prvitc[$ucount] = $row['VITC'];
		$prcalcium[$ucount] = $row['CALCIUM'];
		$priron[$ucount] = $row['IRON'];
		$prdate[$ucount] = $row['DATE'];
		$updated[$ucount] = $row['updated'];
		$serverid[$ucount] = $row['server_id'];
	
		$ucount++;
		}

	}
	
$productcount = $ucount;
    

$status_data = 'DONE';

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$prdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$prdata[$i] = array("ID" => $id[$i],
				"PRODUCT_NAME" => $prname[$i],
				"PRODUCT_BARCODE" => $prbarcode[$i],
				"PRODUCT_PLACE_BOUGHT" => $prplacebought[$i],
				"PRODUCT_MANUFACTURER" => $prmanufacturer[$i],
				"PRODUCT_INGREDIENTS" => $pringredients[$i],
				"PRODUCT_MEASUREMENT" => $prmeasurement[$i],
				"PRODUCT_WEIGHT" => $prweight[$i],
				"PRODUCT_CALORIES" => $prcalories[$i],
				"PRODUCT_CARBOHYDRATE" => $prcarbohydrate[$i],
				"PRODUCT_PROTEIN" => $prprotein[$i],
				"PRODUCT_FAT" => $prfat[$i],
				"PRODUCT_MUFA" => $prmufa[$i],
				"PRODUCT_PUFA" => $prpufa[$i],
				"PRODUCT_CHOLESTEROL" => $prcholesterol[$i],
				"PRODUCT_SAT" => $prsat[$i],
				"PRODUCT_TRANS" => $prtrans[$i],
				"PRODUCT_FIBER" => $prfiber[$i],
				"PRODUCT_SUGAR" => $prsugar[$i],
				"PRODUCT_SODIUM" => $prsodium[$i],
				"PRODUCT_VITA" => $prvita[$i],
				"PRODUCT_VITC" => $prvitc[$i],
				"PRODUCT_CALCIUM" => $prcalcium[$i],
				"PRODUCT_IRON" => $priron[$i],
				"PRODUCT_DATE" => $prdate[$i],
				"UPDATED" => $updated[$i],
				"SERVER_ID" => $serverid[$i]);
}




$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"FOODMALAYSIA_COUNT" => $foodcount,"PRODUCT_COUNT" => $productcount,"FOODMALAYSIA" => $fmdata,"FOODPRODUCTS" => $prdata);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;



?>