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
<form action="3.php" method="get">
    <p>
        <textarea name="text1" required placeholder="Text for one field"></textarea>
    </p>
    <p>
        <button>Send</button>
    </p>
</form>
FORM;

$return = <<<BACK
<a href="https://magento.dn.pebs.biz/l10/homework/functions_forms_tasks/3/3.php">Back</a>
BACK;


if (array_key_exists('text1', $_GET) && is_numeric($_GET['text1'])) {
    $arr = dellWordFromFile($_GET['text1']);
    //    echo $return;
    var_dump($arr);
} else {
    echo $form;
}
$footer = <<<FOOTER
</body>
</html>
FOOTER;
echo $footer;


function dellWordFromFile(string $a): array
{
    $arr = [];
    $handle = fopen(__DIR__ . "/text.txt", "rb");
    if ($handle) {
        while (($buffer = fgets($handle, 4096)) !== false) {

            $arr[] = $buffer;
        }
        if (!feof($handle)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
        }
        fclose($handle);
    }
    return $arr;
}