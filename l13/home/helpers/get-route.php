<?php

function getRoute():string
{
    $route = $_GET['route'] ?? '';

    $storage = dirname(__DIR__) . '/homedir';
    $dir = realpath("{$storage}/{$route}");
//var_dump($dir,$storage);
    if (!str_contains($dir, $storage)) {
        $dir = $storage;
    }
//var_dump($dir);
    return str_replace($storage, '', $dir);
}