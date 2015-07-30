<?php
require_once 'whois.php';
$whoisClass = new Whois;

if(empty($_GET['domain'])){
	$domain = "hello.com";
}else{
	$domain = $_GET['domain'];
}

$domain = str_replace("http://", "", $domain);
$domain = str_replace("https://", "", $domain);
$domain = str_replace("www.", "", $domain);
$domain = explode("/", $domain, 2)[0];

$domain = strtolower($domain);
$domain = htmlspecialchars($domain);

if(empty($_GET['type'])){
	$type = "array";
}else{
	$type = htmlspecialchars($_GET['type']);
}

$whoisResult = $whoisClass->query($domain);

if(!is_array($whoisResult)){
	if(mb_substr($whoisResult, 0, 3) == "++["){
		die($whoisResult);
	}
}else{
	switch ($type){
		case "json":
			$jsonResult = json_encode($whoisResult);
			echo $jsonResult;
			break;
		case "text":
			$textResult = $whoisClass->query($domain, 'text');
			echo $textResult;
			break;
		default:
			print_r($whoisResult);
	}
}
?>