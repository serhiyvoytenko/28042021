<?php
$startScriptTime=microtime(TRUE);

//$arr = 'Hi, there is new array';
//echo $arr[1];
//var_dump($arr);
$arr[]='Petya';
$arr[]='vasya';
$arr=array('nina',100,"Galya");
$arr[]='new petya';
array_push($arr,'new lenya');
var_dump($arr);

$endScriptTime=microtime(TRUE);
$totalScriptTime=$endScriptTime-$startScriptTime;
$test_empty_class = new stdClass();
var_dump($test_empty_class);
echo "\n\r".'<!-- Load time: '.number_format($totalScriptTime, 8).' seconds -->';