<?php
class Mailer {
    public static function mailsend($to,$subject,$message){
        $mail=Yii::app()->Smtpmail;
        $mail->SetFrom('mynutridiari@moh.gov.my', 'test');
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->ClearAllRecipients();
        $mail->AddAddress($to);
        if(!$mail->Send()) {
             echo "Mailer Error: " . $mail->ErrorInfo;
            return false;
        }else {
            // echo "Message sent!";
            return true;
        }
    }
}