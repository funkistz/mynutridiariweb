<?php
$mail = new mailer();
$mail->send_html('mynutridiari@moh.gov.my', 'hezly.mohamed@gmail.com', 'Salam sejahtera 6', 'selamat pagi, dan salam sejahtera 6');

class mailer {
    function send_html($from, $to, $subject, $body, $attachment=array(), $mime_type=array()) {
        require_once('Mail.php');
        require_once('Mail/mime.php');

        $crlf = "\n";
        $mime = new Mail_mime($crlf);
        $mime->setTXTBody('');
        $mime->setHTMLBody($body);
        
        if (count($attachment) > 0) { 
            for ($i = 0; $i < count($attachment); $i++) {
                $mime->addAttachment($attachment[$i], $mime_type[$i]);
            }
        }
        
        $body = $mime->get();
        $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);
        $hdrs = $mime->headers($headers);
        $smtp_params["host"]     = "10.17.237.55"; // SMTP host
        $smtp_params["port"]     = "25";                 // SMTP Port (usually 25)
        $smtp_params["auth"]     = false;
        $smtp_params["username"] = "1GOVUC\mynutridiari.moh";
        $smtp_params["password"] = "xxxxxxxx";
        
        // Sending the email using smtp
        $mail =& Mail::factory("smtp", $smtp_params);
        $mail->_params = '-f mynutridiari@moh.gov.my' ;
        if ($mail->send($to, $hdrs, $body)) {
        	echo 'ok';
        } else {
        	echo 'ko';
        }
    }
}
?>