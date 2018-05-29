<?php header('Content-type: application/json');

error_reporting(0);

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
	
		$ucount++;
		}

	}
    

$categorycount = $ucount;

$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$data = array();

for ($i = 0; $i < $ucount; $i++) {
	$data[$i] = array("ID" => $id[$i],
				"CATEGORY_ID" => $catid[$i],
				"CATEGORY_NAME" => $catname[$i],
				"CATEGORY_ICON" => $caticon[$i],
				"CATEGORY_INFO" => $catinfo[$i],
				"CATEGORY_TYPE" => $cattype[$i],
				"CATEGORY_ICON_DONE" => $catdone[$i],
				"CATEGORY_POSITION" => $catpos[$i],
				"UPDATED" => $updated[$i]);
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
$position = array();

if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$menutype[$ucount] = $row['menu_type'];
		$menudatatitle[$ucount] = $row['menudata_title'];
		$menudatainfo1[$ucount] = str_replace('"',"'",$row['menudata_info1']);
		$menudatainfo2[$ucount] = $row['menudata_info2'];
		$menudataurl[$ucount] = $row['menudata_url'];
		$menudataicon[$ucount] = $row['menudata_icon'];
		$updated[$ucount] = $row['updated'];
		$position[$ucount] = $row['position'];
	
		$ucount++;
		}

	}
    
$menudatacount = $ucount;


$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

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


$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

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
		$cotitle = array();
		$cointro = array();
		$cofull= array();
		$codatetime  = array();
		$serverid  = array();
		$updated= array();


if($result) {

		//fetch the data from the database
		while ($row = mysql_fetch_array($result)) {
	
		$id[$ucount] = $row['id'];
		$cotitle[$ucount] = $row['content_title'];
		$cointro[$ucount] = $row['content_intro'];
		$temp = $row['content_full'];
		$codatetime[$ucount] = $row['content_datetime'];
		$updated[$ucount] = $row['updated'];
		$serverid[$ucount] = $row['id'];
		
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


$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

$codata = array();

for ($i = 0; $i < $ucount; $i++) {
	$codata[$i] = array("ID" => $id[$i],
				"CONTENT_TITLE" => $cotitle[$i],
				"CONTENT_INTRO" => $cointro[$i],
				"CONTENT_FULL" => $cofull[$i],
				"CONTENT_DATETIME" => $codatetime[$i],
				"UPDATED" => $updated[$i],
				"SERVERID" => $serverid[$i]);
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


$syncdate = date('d-m-Y');
$synctime = date('h:i:s');
$updatedata = date('YmdHi');
$updatedataint = (int)$updatedata;

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

$status_data = 'DONE';

$items_array;
$items_array = array( "SYNC_DATE" => $syncdate,"SYNC_TIME" => $synctime,"UPDATED" => $updatedataint,"STATUS" => $status_data,"USERNAME" => $username,"TABLE" => "others","CATEGORIES_COUNT" => $categorycount,"MENUDATA_COUNT" => $menudatacount,"EXERCISE_COUNT" => $exercisecount,"CONTENT_COUNT" => $contentcount,"PRODUCTS_COUNT" => $productscount,"CATEGORIES" => $data,"MENUDATA" => $menudata,"EXERCISEDATA" => $exdata,"CONTENTDATA" => $codata,"PRODUCTSDATA" => $prdata);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo stripslashes(json_encode($return_object));

$current = json_encode($return_object);
$file = 'jsontest.txt';
file_put_contents($file, $current);

//echo $msg;



?>