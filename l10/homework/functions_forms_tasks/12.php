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

function setReverseWord(string $messages): string
{
    $arrayStrings = preg_split('/(?<=[.?!])\s+/', $messages);
    $arrayStrings = array_reverse($arrayStrings);

    return implode(' ', $arrayStrings);
}

$messages = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
//utf8_encode($messages);
var_dump(setReverseWord($messages));

?>


</body>
</html>
