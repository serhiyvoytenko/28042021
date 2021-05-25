<?php

$a1 = [
    'name' => 'Serg',
    'age' => '25',
    'skills' => [
        'php',
        'java',
    ],
];

$serialized = serialize($a1);
var_dump($serialized);
$s1 = 'a:3:{s:4:"name";s:4:"Serg";s:3:"age";s:2:"25";s:6:"skills";a:2:{i:0;s:3:"php";i:1;s:4:"java";}}';
$desiral = unserialize($serialized);
var_dump($desiral);
var_dump(count($a1,COUNT_RECURSIVE));

//var_dump(array_shift($a1),$a1);