<?php
//形態要素解析の処理を行うphp

$p = (isset($_POST["p"])) ? $_POST["p"] : "この文を形態素解析で解析します";

$yapikey = "dj00aiZpPVRsdlFTOHlhWlpMRCZzPWNvbnN1bWVyc2VjcmV0Jng9YzQ-";
$url = "http://jlp.yahooapis.jp/MAService/V1/parse?appid={$yapikey}";
$q = "&sentence={$p}";

$xml = simplexml_load_file("{$url}{$q}");

//echo($xml->saveXML());
//exit;

$j = json_encode($xml);

echo($j);

?>
