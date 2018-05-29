<?php
$socketConnection = @fsockopen ( "10.17.237.55", "25", $errorNumber, $errorString, 30 );
if ( ! $socketConnection )
{
    print '<b>Connection Failed</b><br />' . $errorString . '<br />' . $errorNumber;
}
else
{
    //stream_set_blocking ( $socketConnection, 0 );
    //stream_set_timeout ( $socketConnection, 10 );
    print '<b>Connection Success!</b><br />';
    fputs($socketConnection,'\r');
    sleep(1);
    $buffer = fread ( $socketConnection, 20 );
    $out='';
    for ( $i=0; $i < 20; $i++ )
    {
        $out .= $buffer [ $i ] ;
    }
        $response = trim ( preg_replace( "/^.*?\n(.*)\n[^\n]*$/", "$1", $out ) );
        echo $response;
        //$response = bin2hex($response);
        //hex2ascii('ff:fd:25:ff:fb:01:ff:fb:03:ff:fd:27:ff:fd:1f:ff:fd:00:ff:fb');
    fclose ( $socketConnection );
}