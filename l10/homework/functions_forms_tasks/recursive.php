<?php

$arr = [];

for ($i = 0; $i <= 100; $i++) {

    $arr[$i] = random_int(1, 10000);
}


function echoArray(array $arr, int $key = 0): void
{
    $nextKey = $key + 1;
    if (empty($arr[$nextKey])){
        exit();
    }
    echo $arr[$key].'<br>';
    echoArray($arr, $nextKey);
}
echoArray($arr);
//var_dump($arr);
//var_dump($result, $arr);
