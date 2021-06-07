<?php

declare(strict_types=1);

$comment = serialize($_POST);

$dir = __DIR__ . '/folder/' . date('Y-m-d');

$errors = badwords($_POST['text']);
if ($errors) {
    header('Location: error.php?message=' . $errors);
    exit();
}

header('Location: title.php');

if (!mkdir($dir) && !is_dir($dir)) {
    throw new RuntimeException(sprintf('Directory "%s" was not created', $dir));
}

$file = $dir . '/' . time() . '_' . md5($comment) . '.txt';

file_put_contents($file, $comment);

function badwords(string $messages): ?string
{
    $badword = [
        'loh',
        'giga',
        'jepa',
    ];

    $errors = [];

    foreach ($badword as $value) {
        if ((stripos($messages, $value))!==false) {
            $errors[] = $value;
        }
    }
//    var_dump($errors, $messages, $value);
    if (!empty($errors)) {
        return implode(', ', $errors) . ' not allowed!';
    }

    return null;
}