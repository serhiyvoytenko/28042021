<?php

function hello()
{
    echo 'Hello world','<br>';
}

hello();

$elements = scandir(__DIR__);
$filtered = array_filter($elements, function ($item){
    return !in_array($item, ['.','..']);
});
var_dump($elements, $filtered);