<?php
    $host = $_SERVER['HTTP_HOST'];
    $url = $_SERVER['REQUEST_URI'];
    $url = substr($url, 0, strrpos( $url, '/'));
    $url = $host.$url;
    $localName = 'sulthanallaudeen';
    if($host=='localhost'){
        $url = "https://".$url."/cron";
        #Temporarily Disabling SSL Certificate Verification as i need to run in Local Machine
        $arrContextOptions=array(
        "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
        ),
        );
        $data = file_get_contents($url, false, stream_context_create($arrContextOptions));
    }
    else{
        $data = file_get_contents("https://".$url."/cron");
    }
echo $host.$data;
?>