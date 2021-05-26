<?php

$g1=12;
function test($g1){
    var_dump($g1);
    $in1 =21;
}

test($g1);

$h1 = 15;
function test2(){
    global $h1;
    var_dump($h1);
}
