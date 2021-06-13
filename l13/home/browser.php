<?php

function getFilesList(string $route = ''): array
{
    $fullPath = __DIR__.'/homedir/';
    $folderContents = scandir($fullPath.$route);
    return array_filter($folderContents, callback: static function ($a) {
        return !($a === '.' || $a === '.gitignore');
    });
}