<?php
require_once __DIR__.'/../helpers/get-route.php';


$route=getRoute();


//var_dump($_GET,$_POST,$route);
$directory = __DIR__.'/../homedir/'.$route.'/'.$_POST['directory'];
//var_dump($directory);
if (!mkdir($directory) && !is_dir($directory)) {
    throw new RuntimeException(sprintf('Directory "%s" was not created', ''));
}
header('Location: ../index.php?route='.$route);