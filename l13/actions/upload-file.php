<?php

require_once __DIR__.'/../helpers/response.php';
require_once __DIR__.'/../helpers/request.php';
var_dump($_GET,$_POST,$_FILES);
$rout = getRout();
$fileData = $_FILES['upload']??[];

if (!$fileData){
    error("index.php?rout={$rout}", 'File is required');
}
$redirectUrl="../index.php?rout={$rout}";
$target = __DIR__."/../storage/{$rout}/{$fileData['name']}";
move_uploaded_file($fileData['tmp_name'], $target);
success($redirectUrl, 'Success upload file'.$fileData['name']);

//sleep(5);