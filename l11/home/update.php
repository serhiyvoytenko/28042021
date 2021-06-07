<?php


$dir = __DIR__.'/folder/';
if (isset($_GET['id']) && file_exists($dir.$_GET['id'])) {
    $commentarray = $_POST;
    $commentarray['time']=date('Y-m-d H:i:s');
    $comment = serialize($commentarray);
    file_put_contents($dir.$_GET['id'], $comment);
}else{
    header('Location: error.php?message=File not found!');
    exit();
}
header('Location: title.php');