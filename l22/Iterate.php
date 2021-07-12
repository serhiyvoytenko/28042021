<?php

class Iterate
{
    public string $color;
    public int $weight = 100;
    public static int $width = 898;
    public static int $length = 200;
    public float $height = 500;

    public function iterable(): void
    {
        foreach ($this as $property => $values) {
            echo $property . ' : ' . $values . '<br>';
        }
    }


}

$newIter = new Iterate();
$newIter->iterable();
echo Iterate::$width;
Iterate::$width = 300;
echo Iterate::$width;
var_dump($newIter);
$newIter->height = 700;
$newIter = new Iterate();
var_dump($newIter);
echo $newIter::$width . '<br>';
$newIter->color = 'red';
foreach ($newIter as $property => $value) {
    var_dump("$property : $value");
}
$newIter->iterable();
var_dump($newIter);