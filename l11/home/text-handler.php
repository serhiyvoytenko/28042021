<?php

declare(strict_types=1);

$comment = serialize($_POST);

$dir = __DIR__ . '/folder/' . date('Y-m-d');
if (!is_dir($dir)) {
    mkdir($dir);
}

$file = $dir.'/'.time().'_'.md5($comment).'.txt';
file_put_contents($file,$comment);
    header('Location: forms.php');
//var_dump($_POST);