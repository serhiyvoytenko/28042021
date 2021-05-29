<?php

declare(strict_types=1);


$up = <<<START
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
START;
echo $up;


$form = <<<FORM
<form action="1.php" method="get">
    <p>
        <textarea name="text1" required placeholder="Text for one field"></textarea>
    </p>
    <p>
        <textarea name="text2" required placeholder="Text for two field"></textarea>
    </p>
    <p>
        <button>Send</button>
    </p>
</form>
FORM;

$return = <<<BACK
<a href="https://magento.dn.pebs.biz/l10/homework/functions_forms_tasks/1.php">Back</a>
BACK;


if (array_key_exists('text1', $_GET) && array_key_exists('text2', $_GET)) {
    $commonwords = getCommonWords($_GET['text1'], $_GET['text2']);
//    var_dump($commonwords);
    foreach ($commonwords as $commonword) {
        echo $commonword, '<br>';
    }
    echo $return;
} else {
    echo $form;
}

$footer = <<<FOOTER
</body>
</html>
FOOTER;
echo $footer;


function getCommonWords(string $a, string $b): array
{
    $commonwords=[];
    $text1 = explode(' ', $a);
    $text2 = explode(' ', $b);
//    var_dump($text2,$text1);
    foreach ($text1 as $value) {
//        var_dump($value);
        foreach ($text2 as $item) {
//            var_dump($item);
            if ($value === $item) {
                $commonwords[] = $item;
            }
        }
    }

    return $commonwords;
}