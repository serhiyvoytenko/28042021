<!doctype html>
<html lang="en">
<head>
    <!--    <meta charset="UTF-8">-->
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function setUpperFirstWord(string $messages): string
{
    $arrayStrings = preg_split('/(?<=[.?!])\s+/', $messages);
    $arrayUpper = [];
    foreach ($arrayStrings as $arrayString) {

        $arrayString = mb_str_split($arrayString, 1, "UTF-8");
        $arrayString[0] = mb_convert_case($arrayString[0], MB_CASE_TITLE, "UTF-8");
        $arrayString = implode($arrayString);
        $arrayUpper[] = $arrayString;

    }
    return implode(' ', $arrayUpper);
}

$messages = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти. hello.';
//utf8_encode($messages);
$a = setUpperFirstWord($messages);
echo $a . '<br>';

?>


</body>
</html>
