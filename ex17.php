<?php
if(isset($_GET["url"])){
	$url = $_GET["url"];
	$src = file_get_contents($url);
	$xml = simplexml_load_string($src);
	$json = json_encode($xml->channel);
	echo($json);
}
?>
