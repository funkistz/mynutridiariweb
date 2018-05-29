<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'xxxxx');
define('DB_DATABASE', 'mynutridiariv2');
$connection = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$base_url='http://mynutridiari.moh.gov.my/mynutridiari/mobile/lc/registration/';
?>