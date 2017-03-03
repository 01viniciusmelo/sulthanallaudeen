<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://www.bambaram.in/bambaram/index.php?c=products&m=product_action&id=4762&action=Buy&name=john&phone=1234567890&email=john%40john.com");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"c=products&m=product_action&id=4762&action=Buy&name=john&phone=1231231230&email=a@a.com");
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