<?php

while (true) {
    $number = (int)readline('Enter number: ');
//    var_dump($number);
    $realnumber = random_int(1, 5);
//    echo $realnumber.PHP_EOL;
    echo $realnumber === $number ? 'You WIN' : 'You LOSE';
    echo PHP_EOL;
    $continue = readline('Try again? (y/n):');
    if (strtolower($continue)==='n') break;

}
