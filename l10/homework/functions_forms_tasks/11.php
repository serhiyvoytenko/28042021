<!doctype html>
<html lang="en">
<head>
    <!--    <meta charset="UTF-8">-->
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function setUpperFisrsWord(string $messages): string
{
    $arrayStrings = preg_split('/(?<=[.?!])\s+/', $messages);
    foreach ($arrayStrings as $key => $arrayString) {
        $arrayStrings[$key] = ucfirst($arrayString);
        $b = mb_strtoupper($arrayString, 'UTF-8');
        var_dump($arrayStrings[$key], $b);
    }
    return implode(' ', $arrayStrings);
}

$messages = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти. hello.';
//utf8_encode($messages);
$a = setUpperFisrsWord($messages);
echo $a.'<br>';

$str = "У Мэри Был Маленький Ягнёнок и Она Его Очень ЛЮБИЛА";
$str = mb_strtoupper($str);
echo $str;


?>



</body>
</html>
