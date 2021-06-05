<?php

$comment = serialize($_POST);

$error =wordsFilter($_POST['text']);
if($error){
    header('Location: error.php');
    exit();
}

$dir = __DIR__ . '/storage/' . date('Y-m-d');
if (!is_dir($dir)) {
    mkdir($dir);
}

$file = time() . '_' . md5($comment) . '.log';
$route = "{$dir}/{$file}";
//var_dump($_POST['text']);
//exit();

if (file_exists($route)) {
    header('Location: title.php');
    exit('Duplicate');
}
file_put_contents($route, $comment);
header('Location: title.php');

//var_dump($_POST,$comment,$file);

function wordsFilter(string $messages):?string
{
    $blacklist = [
      'jepa',
      'nigga',
      'loh',
    ];
$errors=[];
    foreach ($blacklist as $word){
        $contains = stripos($messages,$word);
        if($contains!==false){
           $errors[]=$word;
        }
    }
    if ($errors){
        $word =implode(',',$errors);
        $prefix = count($errors)>1?'Words':'Word';
        return "{$prefix} '{$word}' is not accepted";
    }
    return null;
}