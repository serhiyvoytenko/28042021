<?php

declare(strict_types=1);

header('Location: title.php');
$comment = serialize($_POST);

$dir = __DIR__ . '/folder/' . date('Y-m-d');
//if(!is_dir($dir)){
//    mkdir($dir);
//}
if (!mkdir($dir) && !is_dir($dir)) {
    throw new RuntimeException(sprintf('Directory "%s" was not created', $dir));
}
$file = $dir . '/' . time() . '_' . md5($comment) . '.txt';
file_put_contents($file, $comment);