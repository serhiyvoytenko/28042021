<?php

//function getFilesList(string $route = ''): array
//{
//    $fullPath = __DIR__.'/homedir/';
//    $folderContents = scandir($fullPath.$route);
//    return array_filter($folderContents, callback: static function ($a) {
//        return !($a === '.' || $a === '.gitignore');
//    });
//}
function getFilesList(): array
{
    $rout = getRoute();

    $storage = __DIR__ . '/homedir';
    $dir = realpath("{$storage}/{$rout}");
//    var_dump($storage,$dir);exit();
    if (is_file($dir)) {
        $dir = dirname($dir);
    }

    $files = scandir($dir);

    $disabledDirs = ['.', '.gitignore',];
    if (realpath($storage) === $dir) {
        $disabledDirs[] = '..';
    }

    $files = array_filter(
        $files,
        static fn($file) => !in_array($file, $disabledDirs, true)
    );

//    usort($files, 'sortFileType');

    return $files;
}
