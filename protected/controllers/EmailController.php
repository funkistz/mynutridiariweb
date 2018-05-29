<?php
class EmailController extends Controller {
     public function actionMailsend(){
        $mail=Yii::app()->Smtpmail;
        //$mail->SetFrom('mynutridiari.moh@1govuc.gov.my', 'Azman bin Zakaria');
        $mail->SetFrom('mynutridiari@moh.gov.my', 'mynutri');
        $mail->Subject = "Hello World 4...";
        $mail->MsgHTML('This a hello world 4 mail from azman zakaria');
        //$mail->AddAddress('azman1204@yahoo.com', "");
        $mail->AddAddress('azman120474@gmail.com', "");
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }else {
            echo "Message sent to... ";
        }
     }
    
     public function actionTelnet() {
        $socketConnection = @fsockopen("10.17.237.55", "25", $errorNumber, $errorString, 30);
        //$socketConnection = @fsockopen("localhost", "80", $errorNumber, $errorString, 30);
        //$socketConnection = @fsockopen("74.200.250.164", "25", $errorNumber, $errorString, 30); // server ost....
        //$socketConnection = @fsockopen("localhost", "3306", $errorNumber, $errorString, 30); // server ost....
        
        if (!$socketConnection) {
            print '<b>Connection Failed</b><br />' . $errorString . '<br />' . $errorNumber;
        } else {
            //stream_set_blocking ( $socketConnection, 0 );
            //stream_set_timeout ( $socketConnection, 10 );
            print '<b>Connection Success!</b><br />';
            fputs($socketConnection, '\r');
            sleep(1);
            $buffer = fread($socketConnection, 20);
            $out = '';
            for ($i = 0; $i < 20; $i++) {
                $out .= $buffer [$i];
            }
            $response = trim(preg_replace("/^.*?\n(.*)\n[^\n]*$/", "$1", $out));
            echo $response;
            //$response = bin2hex($response);
            //hex2ascii('ff:fd:25:ff:fb:01:ff:fb:03:ff:fd:27:ff:fd:1f:ff:fd:00:ff:fb');
            fclose($socketConnection);
        }
    }
    
    public function actionSample3() {
        $msg = "test";
        $is_sent = Mailer::mailsend('mynutridiari@moh.gov.my', 'test subj', $msg);
        if ($is_sent) {
            echo "mail telah dihantar";
        } else
            echo "Mail tidak dapat dihantar";
    }
    
    public function actionSend() {
        $mail = new YiiMailer();
        $mail->setFrom('mynutridiari.moh@1govuc.gov.my', 'John Doe');
        $mail->setTo('azman@myopensoft.net');
        $mail->setCc('azman120474@gmail.com');
        $mail->setSubject('testing dari ofis');
        $mail->setBody('Simple message...');
        
        echo '<pre>';
        echo $mail->Host;
        echo $mail->Port;
        echo $mail->Username;
        echo $mail->Password;
        echo $mail->SMTPAuth;
        echo '</pre>';	
        
        if($mail->send()) {
          echo 'ok';
        } else {
          echo 'ko';
          echo $mail->getError();
        }
    }
}
