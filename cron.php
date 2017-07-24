<?php
$host = $_SERVER['HTTP_HOST'];
$url = $_SERVER['REQUEST_URI'];
$url = substr($url, 0, strrpos( $url, '/'));
$url = $host.$url;
$url = "https://".$url."/cron";
$data = file_get_contents($url);
print_r($data);
?>