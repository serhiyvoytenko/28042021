<?php

$start =$argv[1]??0;
$end = $argv[2]??0;
$range = range($start,$end);

var_dump($range);

$big = [
    1
];