<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
include '../registration/db.php';
$msg='';
$email='';
$status_data='INCOMPLETE';
$diary='';
$exercise='';

if(!empty($_POST['email']) && isset($_POST['email']))
{

$email=mysqli_real_escape_string($connection,$_POST['email']);

$syncdate = date("Y-m-d h:i:s");

  $count=mysqli_query($connection,"SELECT * FROM user_diary WHERE username='$email'");

  // email check
  if(mysqli_num_rows($count) > 0)
  {

    while ($row = mysqli_fetch_assoc($count)) {

  		$diary = $row['diary'];
      $exercise = $row['exercise'];
  		$weight = $row['weight'];

      $msg= "Retrieve successfull.";
      $status_data = 'SUCCESS';
		}

  }
  else
  {
    $msg= 'User diary not found.';
    $status_data = 'NODATA';
  }


}else{
  $msg= $_POST['email'] . ' - ' . $_POST['diary'];
}


$logindate = date("Y-m-d h:i:s");
$user = array("USER_EMAIL" => $email);

$items_array;
$items_array = array( "RETRIEVE_DATE" => $logindate,"STATUS" => $status_data,"MESSAGE" => $msg,
"USER_INFO" => $user,"DIARY" => $diary,"EXERCISE" => $exercise,"WEIGHT" => $weight);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;

?>
