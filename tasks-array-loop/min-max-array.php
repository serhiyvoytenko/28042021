<?php

$a = range(30, 100);
shuffle($a);
$min = '50';
$key_min = '';
$max = '';
$key_max = '';
foreach ($a as $key => $value) {
    if ($value < $min) {
        $min = $value;
        $key_min = $key;
    }
    if ($value > $max) {
        $max = $value;
        $key_max = $key;
    }
}

var_dump($a, $key_min, $key_max, $min, $max);
$a[$key_max]=$min;
$a[$key_min]=$max;
var_dump($a);

