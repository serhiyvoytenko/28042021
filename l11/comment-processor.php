<?php

$comment = serialize($_POST);

$dir = __DIR__.'/storage/'.date('Y-m-d');
if(!is_dir($dir)){
    mkdir($dir);
}

$file=time().'_'.md5($comment).'.log';
$route = "{$dir}/{$file}";
if(file_exists($route)){
    header('Location: forms.php');
    exit('Duplicate');
}
file_put_contents($route,$comment);
header('Location: forms.php');

var_dump($_POST,$comment,$file);