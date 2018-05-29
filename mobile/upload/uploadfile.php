<?php
ini_set('max_upload_filesize', 8388608);
$status_upload = 'INIT';
$status_insert = 'INIT';
$username = '';
$status_upload = '';
$uploadfile = '';
$uploadfiletype = '';
$uploadfiletmp = '';
$finalfile = '';
$question  = '';
$type  = '';


$username = $_POST['username'];
$enterdate = $_POST['enterdate'];
$entertime = $_POST['entertime'];
$updatedate= (int)$_POST['updatedate'];
$socialid = $_POST['socialid'];
$localfilename = $_POST['name'];
$question = $_POST['message'];
$type = $_POST['type'];





  if ($_FILES["file"]["error"] > 0)
    {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    $status_upload = 'ERROR';
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    $uploadfile = $_FILES["file"]["name"] ;
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    $uploadfiletype = $_FILES["file"]["type"] ;
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    $uploadfilesize = $_FILES["file"]["size"];
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    $uploadfiletmp = $_FILES["file"]["tmp_name"] ;
 
    if (file_exists("upload/" . $socialid.".jpg"))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      $status_upload = 'EXIST';
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $socialid.".jpg");
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      $finalfile = $socialid.".jpg" ;
      $status_upload = 'SUCCESS';
      
      	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "xxxxx";
	$dbname = "mynutridiariv2";

	// Create connection
	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
	// Check connection
	if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO social (date, time, imagepath,question,username,socialid,type,updated,remotefile)
	VALUES ('$enterdate','$entertime','$localfilename','$question','$username','$socialid','$type',$updatedate,'$finalfile')";

	if (mysqli_query($conn, $sql)) {
    		$status_insert = 'SUCCESS';
	} else {
    		$status_insert = 'FAILED';
	}

	mysqli_close($conn);
      
      }
    }
    

    
$uploaddate = date('d-m-Y');
$uploadtime = date('h:i:s');
$fff = array("UPLOAD_FILE" => $uploadfile,"TYPE" => $uploadfiletype,"SIZE" => $uploadfiletype,"TEMP_FILE" => $uploadfiletmp,"FINAL_FILE" => $finalfile);

$items_array;
$items_array = array( "USERNAME" => $username,"SOCIALID" => $socialid, "UPLOAD_DATE" => $uploaddate,"UPLOAD_TIME" => $uploadtime,"STATUS" => $status_upload,"STATUS_DATA" => $status_insert,"FILE_INFO" => $fff);

// return the JSON
$return_object=array();
$return_object["social"] = $items_array;
echo json_encode($return_object);
?>