<?php

function getNumbers(int $min, int $max, bool $evensOnly = true): array
{
    $numbers = range($min, $max);
    if ($evensOnly) {
        $numbers = array_filter($numbers, fn($number) => $number % 2 === 0);
    }
    return $numbers;
}

$numbers = getNumbers(5, 19);
var_dump($numbers);

