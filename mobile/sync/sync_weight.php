<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
include '../registration/db.php';
$msg='';
$email='';
$status_data='INCOMPLETE';

if(!empty($_POST['email']) && isset($_POST['email']) && isset($_POST['weight']))
{

$email=mysqli_real_escape_string($connection,$_POST['email']);
$weight=mysqli_real_escape_string($connection,$_POST['weight']);

$syncdate = date("Y-m-d h:i:s");

  $count=mysqli_query($connection,"SELECT uid FROM users WHERE email='$email'");

  // email check
  if(mysqli_num_rows($count) > 0)
  {
    mysqli_query($connection,"REPLACE INTO user_diary (username,weight,last_sync) VALUES('$email','$weight','$syncdate')");
    mysqli_close($connection);
    $msg= "Sync weight successfull.";
    $status_data = 'SUCCESS';
  }
  else
  {
    $msg= 'User does not exist.';
    $status_data = 'ERROR';
  }


}else{
  $msg= $_POST['email'] . ' - ' . $_POST['diary'];
}


$logindate = date("Y-m-d h:i:s");
$user = array("USER_EMAIL" => $email);

$items_array;
$items_array = array( "SYNC_DATE" => $logindate,"STATUS" => $status_data,"MESSAGE" => $msg,"USER_INFO" => $user);

// return the JSON
$return_object=array();
$return_object["sync"] = $items_array;
echo json_encode($return_object);
//echo $msg;

?>
