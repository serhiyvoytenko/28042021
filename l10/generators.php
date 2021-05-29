<?php

function getNumbers(int $min, int $max):Generator
{
//    while ($min<=$max){
//        yield $min;
//        $min++;
//    }
    for (;$min<=$max;$min++){
        yield $min;
    }
//    return range($min, $max);
}
$start=microtime(true);
$numbers = getNumbers(100,100000);

foreach ($numbers as $number){
    echo $number,'<br>';
}

$end=microtime(true);
echo $end-$start;