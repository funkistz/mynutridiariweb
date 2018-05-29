<html><body>
<?php
include('Mail.php');
//$recipients = 'norhishammohdnor@gmail.com'; //CHANGE
$recipients = 'azman120474@gmail.com'; //CHANGE
$headers['From']= 'mynutridiari@moh.gov.my'; //CHANGE
$headers['To']= 'azman120474@gmail.com'; //CHANGE
$headers['Subject'] = 'Test message';
$body = 'Test message'; // Define SMTP Parameters
$params['host'] = 'postmaster.1govuc.gov.my';
$params['port'] = '25';
$params['auth'] = 'true';
$params['username'] = 'x1GOVUC/mynutridiari.moh'; //CHANGE
$params['password'] = 'xxxxxxxx'; //CHANGE

/* The following option enables SMTP debugging and will print the SMTP conversation to the page, it will only help with authentication issues, if PEAR::Mail is not installed you won't get this far. */

$params['debug'] = 'true'; // Create the mail object using the Mail::factory method
$mail_object =& Mail::factory('smtp', $params); // Print the parameters you are using to the page

foreach ($params as $p){
 echo "$p<br />";
}

// Send the message
$mail_object->send($recipients, $headers, $body);

?>
</body></html>

