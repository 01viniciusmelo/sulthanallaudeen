<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://www.velammalglobal.edu.in/puzhal/contact-handler-velf.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"name=john&email=john@gmail.com&phone=9863378494&message=hello");
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