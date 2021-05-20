<?php

$arrays = array();
$obj = new stdClass();
var_dump($obj);
$other_arrays = array($obj);
$arrays[0][0]=$other_arrays;
var_dump($arrays);
echo '<pre>';
print_r($arrays);
echo '</pre>';