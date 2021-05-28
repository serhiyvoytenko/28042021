<?php

function hello(string $name, int $age = 10)
{
    echo 'Hello, ', $name, ' ', $age, ' !<br>';
}

$users = [
    'Dmytro',
    'Artem',
    'Ivan',
];

foreach ($users as $value) {
    hello($value);
}

function sum(int ...$numbers)
{
    var_dump($numbers);
    echo array_sum($numbers);
}

sum(1, 9, 12, 20);

function oldSum()
{
    var_dump(func_num_args(),func_get_args());
    echo array_product(func_get_args());
}

oldSum('tata',1,2,2,4,5,6);