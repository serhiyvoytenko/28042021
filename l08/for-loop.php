<?php

$end = time() + 1;
$a = 0;
var_dump($end);
for (;; $a += 2) {
    echo $a;
//    var_dump(time(),$end);
    if (time() >= $end) {
        break;
    }
}

for ($q = 1; $q <= 10; $q++) {
    for ($b = 1; $b <= 10; $b++) {
        $result= $q*$b;
        echo "{$q} x {$b} = $result".'<br>';
    }
    echo '<hr>';
}