<?php

$fruit = 'banana';
$exoticFruit = &$fruit;

echo $exoticFruit,'<br>',$fruit,'<hr>';
//var_dump($exoticFruit);
//var_dump($fruit);

$text = 'qwerty';
$$text = 123;

echo $$text;
echo $qwerty;