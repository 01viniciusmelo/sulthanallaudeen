<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://www.altimiz.com/includes/contact.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"contact=contact&hiddenName=hidden&email=john@gmail.com&phone=9863378494&project=Cresentz Square");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output;
exit;
$identifier = "csrfmiddlewaretoken";
$first_step = explode("csrfmiddlewaretoken' value='",$homepage );
$second_step = explode("' />" , $first_step[1] );
echo $second_step[0];
//contact-handler.php
//http://www.lac.co.in/includes/contact-handler.php
?>