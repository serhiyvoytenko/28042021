<?php

$end=time()+2;
$count = 1;
while (true){
    echo $count++.'<br>'.PHP_EOL;
    var_dump(time(),$end);
    if (time()>=$end){break;}
}
