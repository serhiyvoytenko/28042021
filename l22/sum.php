<?php

$var = 'привет';
$test = 'test';
var_dump(empty($var));
echo $var, $test, '<hr>';

$test = str_split($test);
var_dump(count($test), $test);
var_dump(strlen($var));
echo '<hr>';


$num = -3.14;
$location = 34.456;
$format = 'The %2$s contains %1$d monkeys.
           That\'s a nice %2$s full of %1$d monkeys.';
echo sprintf($format, $num, $location);