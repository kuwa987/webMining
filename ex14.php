<?php
//任意のURLからテキストを取得するPHP

include("simple_html_dom.php");

$url = (isset($_GET["url"])) ? $_GET["url"] : "http://www.bunkyo.ac.jp/";

$html = file_get_html($url);
echo($html->plaintext);

?>