<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://sunnybee.in/includes/contact_handler.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"name=john&email=john@gmail.com&phone=9863378494&message=hello");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output;
?>