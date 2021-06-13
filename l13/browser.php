<?php

function getFilesList(): array
{
    $rout = getRout();

    $storage = __DIR__ . '/storage';
    $dir = realpath("{$storage}/{$rout}");
    if (is_file(($dir))) {
        $dir = dirname($dir);
    }
//    var_dump(scandir($dir));
    $files = scandir($dir);

    $disabledDirs = ['.', '.gitignore'];
    if (realpath($storage) === $dir) {
        $disabledDirs[] = '..';
    }

    return array_filter(
        $files,
        static fn($file) => !in_array($file, $disabledDirs)
    );
}

function renderFile()
{
    $rout = getRout();

    $storage = __DIR__.'/storage';
    $file = realpath("{$storage}/{$rout}");
    if (!is_file(($file))){
        return '';
    }

    $type = mime_content_type($file);
    switch ($type){
        case 'image/jpeg':
            return renderImage($rout);
        default:
            return 'File type is not supported';
    }
}

function renderImage(string $rout): string
{
    return "<img src='actions/get-file.php?rout={$rout}' alt='{$rout}'>";
}