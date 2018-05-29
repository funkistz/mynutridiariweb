<?php header('Content-type: application/json');

$lastsync = (int)$_POST['lastsync'];

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

$status_data = 'INIT';

//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from categories where updated > ".$lastsync);

		$id = array();
		$catid = array();
		$catname = array();
		$caticon = array();
		$catinfo = array();
		$cattype = array();
		$catdone = array();
		$catpos = array();
		$updated = array();
		$status = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$catid[$ucount] = $row['category_id'];
		$catname[$ucount] = $row['category_name'];
		$caticon[$ucount] = $row['category_icon'];
		$catinfo[$ucount] = $row['category_info'];
		$cattype[$ucount] = $row['category_type'];
		$catdone[$ucount] = $row['category_icon_done'];
		$catpos[$ucount] = $row['category_position'];
		$updated[$ucount] = $row['updated'];
		$status[$ucount] = $row['status'];
	
		$ucount++;
		}

	}
    

$categorycount = $ucount;

$catdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$catdata[$i] = array("ID" => $id[$i],
				"CATEGORY_ID" => $catid[$i],
				"CATEGORY_NAME" => $catname[$i],
				"CATEGORY_ICON" => $caticon[$i],
				"CATEGORY_INFO" => $catinfo[$i],
				"CATEGORY_TYPE" => $cattype[$i],
				"CATEGORY_ICON_DONE" => $catdone[$i],
				"CATEGORY_POSITION" => $catpos[$i],
				"UPDATED" => $updated[$i],
				"STATUS" => $status[$i]);
}



//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from menudata where updated > ".$lastsync);

		$id = array();
		$menutype = array();
		$menudatatitle = array();
		$menudatainfo1 = array();
		$menudatainfo2 = array();
		$menudataurl = array();
		$menudataicon = array();
		$updated = array();
		$status = array();
		$position = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$menutype[$ucount] = $row['menu_type'];
		$menudatatitle[$ucount] = $row['menudata_title'];
		$menudatainfo1[$ucount] = $row['menudata_info1'];
		$menudatainfo2[$ucount] = $row['menudata_info2'];
		$menudataurl[$ucount] = $row['menudata_url'];
		$menudataicon[$ucount] = $row['menudata_icon'];
		$updated[$ucount] = $row['updated'];
		$status[$ucount] = $row['status'];
		$position[$ucount] = $row['position'];
	
		$ucount++;
		}

	}
    
$menudatacount = $ucount;

$menudata = array();

for ($i = 0; $i < $ucount; $i++) {
	$menudata[$i] = array("ID" => $id[$i],
				"MENUDATA_TYPE" => $menutype[$i],
				"MENUDATA_TITLE" => $menudatatitle[$i],
				"MENUDATA_INFO1" => $menudatainfo1[$i],
				"MENUDATA_INFO2" => $menudatainfo2[$i],
				"MENUDATA_ICON" => $menudataicon[$i],
				"MENUDATA_URL" => $menudataurl[$i],
				"UPDATED" => $updated[$i],
				"STATUS" => $status[$i],
				"POSITION" => $position[$i]);
}

//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from exercise where updated > ".$lastsync);

		$id = array();
		$exname = array();
		$exinfo = array();
		$exicon = array();
		$excalories = array();
		$updated = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$exname[$ucount] = $row['exercise_name'];
		$exinfo[$ucount] = $row['exercise_info'];
		$exicon[$ucount] = $row['exercise_icon'];
		$excalories[$ucount] = $row['exercise_calories'];
		$updated[$ucount] = $row['updated'];
	
		$ucount++;
		}

	}
    
$exercisecount = $ucount;

$exdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$exdata[$i] = array("ID" => $id[$i],
				"EXERCISE_NAME" => $exname[$i],
				"EXERCISE_INFO" => $exinfo[$i],
				"EXERCISE_ICON" => $exicon[$i],
				"EXERCISE_CALORIES" => $excalories[$i],
				"UPDATED" => $updated[$i]);
}

//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from content where updated > ".$lastsync);

		$id = array();
		$cotitle[$ucount] = array();
		$cointro[$ucount] = array();
		$cofull[$ucount] = array();
		$codatetime[$ucount]  = array();
		$updated[$ucount] = $row['updated'];


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$cotitle[$ucount] = $row['content_title'];
		$cointro[$ucount] = $row['content_intro'];
		$temp = $row['content_full'];
		$codatetime[$ucount] = $row['content_datetime'];
		$updated[$ucount] = $row['updated'];
		
		$temp2 = preg_replace('/[ ]{2,}|[\t]/', ' ', trim($temp));
		
		//$cofull[$ucount] = preg_replace( "/\r|\n/", "", $cofull[$ucount] );
		
		//$cofull[$ucount] = preg_replace('/\s+/', '', $cofull[$ucount]);
		
		$order   = array("\r\n", "\n", "\r");
   		$replace = '<br />';
    		$cofull[$ucount] = str_replace($order, $replace, $temp2);
    		
    		
	
		$ucount++;
		}

	}
    
$contentcount = $ucount;

$codata = array();

for ($i = 0; $i < $ucount; $i++) {
	$codata[$i] = array("ID" => $id[$i],
				"CONTENT_TITLE" => $cotitle[$i],
				"CONTENT_INTRO" => $cointro[$i],
				"CONTENT_FULL" => $cofull[$i],
				"CONTENT_DATETIME" => $codatetime[$i],
				"UPDATED" => $updated[$i]);
}

//execute the SQL query and return records
$ucount=0;
$result = mysql_query("SELECT * from products where updated > ".$lastsync);

		$id = array();
		$prtitle = array();
		$prinfo = array();
		$prprice = array();
		$prcurrency = array();
		$prcategory = array();
		$proptions = array();
		$primage = array();
		$updated = array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$prtitle[$ucount] = $row['product_title'];
		$prinfo[$ucount] = $row['product_info'];
		$prprice[$ucount] = $row['product_price'];
		$prcurrency[$ucount] = $row['product_currency'];
		$prcategory[$ucount] = $row['product_category'];
		$proptions[$ucount] = $row['product_options'];
		$primage[$ucount] = $row['product_image'];
		$updated[$ucount] = $row['updated'];
	
		$ucount++;
		}

	}
    
$productscount = $ucount;


$prdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$prdata[$i] = array("ID" => $id[$i],
				"PRODUCT_TITLE" => $prtitle[$i],
				"PRODUCT_INFO" => $prinfo[$i],
				"PRODUCT_PRICE" => $prprice[$i],
				"PRODUCT_CURRENCY" => $prcurrency[$i],
				"PRODUCT_CATEGORY" => $prcategory[$i],
				"PRODUCT_OPTIONS" => $proptions[$i],
				"PRODUCT_IMAGE" => $primage[$i],
				"UPDATED" => $updated[$i]);
}


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
   
$foodmalaysiacount = $ucount; 

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
	
$foodproductcount = $ucount;
    

$fpdata = array();

for ($i = 0; $i < $ucount; $i++) {
	$fpdata[$i] = array("ID" => $id[$i],
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


$status_data = 'DONE';

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$items_array;
//$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"CATEGORIES_COUNT" => $categorycount,"CATEGORIES" => $catdata,"MENUDATA_COUNT" => $menudatacount ,"MENUDATA" => $menudata,"EXERCISE_COUNT" => $exercisecount ,"EXERCISEDATA" => $exdata);
//$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"CATEGORIES_COUNT" => $categorycount,"CATEGORIES" => $catdata,"MENUDATA_COUNT" => $menudatacount ,"MENUDATA" => $menudata,"EXERCISE_COUNT" => $exercisecount ,"EXERCISEDATA" => $exdata,"PRODUCTS_COUNT" => $productscount ,"PRODUCTSDATA" => $prdata,"CONTENT_COUNT" => $contentcount ,"CONTENTDATA" => $codata);
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"CATEGORIES_COUNT" => $categorycount,"CATEGORIES" => $catdata,"MENUDATA_COUNT" => $menudatacount ,"MENUDATA" => $menudata,"EXERCISE_COUNT" => $exercisecount ,"EXERCISEDATA" => $exdata,"PRODUCTS_COUNT" => $productscount ,"PRODUCTSDATA" => $prdata,"CONTENT_COUNT" => $contentcount ,"CONTENTDATA" => $codata,"FOODMALAYSIA_COUNT" => $foodmalaysiacount ,"FOODMALAYSIA" => $fmdata,"FOODPRODUCTS_COUNT" => $foodproductcount ,"FOODPRODUCTS" => $fpdata);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo stripslashes(json_encode($return_object));

//$current = json_encode($return_object);
//$file = 'jsontest.txt';
//file_put_contents($file, $current);

//echo $msg;



?>