<?php

declare(strict_types=1);


$header = <<<START
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
echo $header;


$form = <<<FORM
<form action="2.php" method="get">
    <p>
        <textarea name="text1" required placeholder="Text for one field"></textarea>
    </p>
    <p>
        <button>Send</button>
    </p>
</form>
FORM;

$return = <<<BACK
<a href="https://magento.dn.pebs.biz/l10/homework/functions_forms_tasks/2.php">Back</a>
BACK;


if (array_key_exists('text1', $_GET)) {
    $gettoplongword = getTopLongWord($_GET['text1']);
    foreach ($gettoplongword as $value) {
        echo $value, '<br>';
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


function getTopLongWord(string $a): array
{
    $toplongword = explode(' ', $a);
    foreach ($toplongword as $key => $value) {
        if ($value === '') {
            unset($toplongword[$key]);
        }
    }
    $strlen=array_map('strlen', $toplongword);
    array_multisort($strlen, SORT_DESC, $toplongword);
    return array_slice($toplongword, 0, 3);
}