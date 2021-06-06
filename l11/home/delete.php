<?php

header('Location: title.php');
$dir = __DIR__ . '/folder/';
unlink($dir.$_GET['id']);
//var_dump($_GET);