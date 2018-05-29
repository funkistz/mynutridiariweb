<?php
include 'db.php';
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=mysqli_real_escape_string($connection,$_GET['code']);
$c=mysqli_query($connection,"SELECT uid FROM users WHERE activation='$code'");

if(mysqli_num_rows($c) > 0)
{
$count=mysqli_query($connection,"SELECT uid FROM users WHERE activation='$code' and status='0'");

if(mysqli_num_rows($count) == 1)
{
mysqli_query($connection,"UPDATE users SET status='1' WHERE activation='$code'");
$msg="Your account is activated"; 
}
else
{
$msg ="Your account is already active, no need to activate again";
}

}
else
{
$msg ="Wrong activation code.";
}

}

?>

<?php 



echo '<head><title>Activation</title><style type="text/css">body{background-color: #F90;}</style></head><body>';
echo '<table width="80%" border="2" align="center" cellpadding="5" cellspacing="5">';
echo '<tr><td><div align="center"><img src="./logo-floating@2x.png" width="284" height="226" align="absmiddle" />';
echo '</div></td></tr><tr><td bgcolor="#FFFFFF"><div align="center">';
echo $msg;
echo '</div></td></tr><tr><td><div align="center"> copyright (c) MyNutriApps II : MyNutriDiari   ';   
echo 'Nutrition Division, Ministry Of Health Malaysia </div></td></tr></table></body></html>';





?>