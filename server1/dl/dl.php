<?php

$domain_name = "domain.com";

$pathinfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : $_SERVER['REDIRECT_URL'];    
$params = preg_split('|/|', $pathinfo, -1, PREG_SPLIT_NO_EMPTY);

$file = ltrim(rtrim($params[0]));
$file = strip_tags($file);
$file = filter_var($file, FILTER_SANITIZE_STRING);

if(empty($file) || is_null($file)) {
	header("location:https://" . $domain_name . "/404");
	die();
}

$link = md5(str_replace(".", "", $_SERVER['REMOTE_ADDR']));
header("location:https://dl." . $domain_name . "/download.php?f=" . $file . "&c=" . $link);
die();
?>