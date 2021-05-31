<?php

declare(strict_types=1);

function listDirectoryFile(string $path, string $word): array
{
    if (empty($word)){
        exit('Error'.PHP_EOL);
    }
    $listdir = scandir($path);
    if (!empty($listdir)) {
        foreach ($listdir as $key => $value) {
            if (is_dir($value)) {
                unset($listdir[$key]);
            }
            if (strpos($value, $word) === false && !empty($word)) {
                unset($listdir[$key]);
            }
        }

    } else {
        echo 'empty!';
    }
    return $listdir;
}

$a = listDirectoryFile(__DIR__, '.');
foreach ($a as $value) {
    echo $value, PHP_EOL;
}