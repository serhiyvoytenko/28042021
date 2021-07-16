<?php

$iNum1 = 10;
$iNum2 = 0;

try{
    if ($iNum2 === 0){
        throw new RuntimeException("Division by Zero<br>");
    }
    $iResult = $iNum1 / $iNum2;
    echo ("Division Result of \$iNum1 and \$iNum2 = $iResult <br/>");
}
catch (RuntimeException $e){
    echo $e->getMessage();
    echo ("Division by Zero is not possible");
}