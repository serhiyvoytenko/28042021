<?php

$string = 'яблоко вишня черешня  hi    вишня           вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$string = explode(' ', $string);

//array_map('trim', $string);
$string = array_filter($string);
var_dump($string);
$arrayString = array_count_values($string);
arsort($arrayString);

array_map('trim', $arrayString);
array_filter($arrayString);
//array_filter(array_map('trim', $arrayString));
var_dump($arrayString);

foreach ($arrayString as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}