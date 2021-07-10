<?php

class GrandFather
{
    private bool $dimencia = true;
}

class Father extends GrandFather
{
    public string $eyeColor = 'brown';

    public function work()
    {
        echo 'Make tables<br>';
    }
}

$test = new Father();

$test->work();