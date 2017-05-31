<?php
$json = file_get_contents("https://api.booklog.jp/json/sinasi");//jsonを取ってくる
$arr = json_decode($json, true);//連想配列にする

var_dump($arr);
?>