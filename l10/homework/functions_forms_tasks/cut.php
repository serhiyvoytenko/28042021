<?php

function cut(string $string, int $numberSymbol = 10): string
{
    $string = mb_str_split($string);
    $newArray = [];
    $numberSymbolFor = (count($string) >= $numberSymbol) ? $numberSymbol : count($string);
    var_dump($numberSymbolFor);
    for ($i = 0; $i < $numberSymbolFor; $i++) {
        $newArray[] = $string[$i];
    }
    return implode($newArray);
}

var_dump(cut('lkjhlkjhlkjhlkjhlkjhlkh    lkjhlkjh ', 20));

