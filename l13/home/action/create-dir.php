<?php

require_once __DIR__ . '/../helpers/get-route.php';
require_once __DIR__ . '/../helpers/response.php';

//var_dump($_POST);
$directoryName = $_POST['directory'];
$route = getRoute();
//var_dump($directoryName,$route);exit();


//var_dump($_GET,$_POST,$route);
$directory = __DIR__ . '/../homedir/' . $route . '/' . $directoryName;
//var_dump($directory);
if (!mkdir($directory) && !is_dir($directory)) {
    throw new RuntimeException(sprintf('Directory "%s" was not created', ''));
}
//header('Location: ../index.php?route='.$route);
success("../index.php?route=$route", "Directory {$directoryName} successfully created");