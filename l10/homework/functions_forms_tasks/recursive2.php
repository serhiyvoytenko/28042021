<?php

function sumNumber(int $number): int
{
    $arr = str_split($number);
    $result = array_sum($arr);
    if ($result>9){
        $result = sumNumber($result);
    }

    return $result;
}

var_dump(sumNumber(555555));