<?php


declare(strict_types=1);


const CR = "\r";          // Carriage Return: Mac
const LF = "\n";          // Line Feed: Unix
const CRLF = "\r\n";      // Carriage Return and Line Feed: Windows
const BR = '<br />' . LF; // HTML Break

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
    $del = delWordFromFile((int)$_GET['text1']);
    echo '<br>';
    echo $return;
} else {
    echo $form;
}
$footer = <<<FOOTER
</body>
</html>
FOOTER;
echo $footer;


function delWordFromFile(int $a): bool
{
    $arr = [];
    $handle = fopen(__DIR__ . "/text.txt", "rb");
    if ($handle) {
        while (($buffer = fgets($handle, 4096)) !== false) {

            $arr[] = $buffer;
        }
        if (!feof($handle)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
            return false;
        }
        fclose($handle);
    }
    var_dump($arr);
    foreach ($arr as $key1 => $value) {
        $value=normalize($value);
        $new_arr = explode(' ', $value);
        foreach ($new_arr as $key => $str) {
            if (mb_strlen($str) > $a) {
                unset($new_arr[$key]);
            }
        }
        if ($value===''){
            unset($arr[$key1]);
        }
        $arr[$key1]=implode(' ',$new_arr);
        if(empty($arr[$key1])){
            unset($arr[$key1]);
        };
    }
    var_dump($arr);
    $handle = fopen(__DIR__ . "/text.txt", "wb");
    if ($handle) {
        foreach ($arr as $value){
            fwrite($handle,$value);
            fwrite($handle,"\r\n");
        }
        fclose($handle);
    }

    return true;
}

function normalize($s) {
    $s = str_replace(array("\r\n", "\r", "\n"), "", $s);
    return $s;
}
