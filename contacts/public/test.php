<?php

$array = [
    'first_name'=>'Serg',
    'last_name'=>'Voytenko',
    'age'=>45,
    'family'=>[
        'son'=>'Serhiy',
        'daughter'=>'Nastya',
    ],
];

$first_name = '';
$son = '';

//var_dump($GLOBALS);
var_dump($array,$first_name,$son);
var_dump(extract($array));
var_dump($array,$first_name,$son);