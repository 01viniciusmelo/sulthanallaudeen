<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://www.bambaram.in/bambaram/index.php?c=plans&m=subscribe&name=FUN!&desc=Books%20only&toys=0&limit=30&monthly=350&discount=0&deposit=500&duration=3&books=5");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"plan=FUN!&duration=3&name=john&company=john&phone=1234512345&email=a@a.com&submitMessage=Subscribe");
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