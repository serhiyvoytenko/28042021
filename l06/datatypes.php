<?php

var_dump(PHP_INT_MAX, PHP_INT_MIN, PHP_FLOAT_MAX);

$array = [
  'hi'.'hi',
  1+1,
  234.12,
  'hello'
];

var_dump($array);

$object = new stdClass();
var_dump($object);
$resource = fopen(__DIR__.'/concatenaition.php','rb');
var_dump($resource);
fclose($resource);