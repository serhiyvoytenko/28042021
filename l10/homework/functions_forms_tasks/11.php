<?php

function setUpperFisrsWord(string $messages): string
{
    $arrayStrings = preg_split('/(?<=[.?!])\s+/', $messages);
    foreach ($arrayStrings as $key => $arrayString) {
        $arrayStrings[$key]=ucfirst($arrayString);
        var_dump($arrayStrings[$key]);
    }
    return implode(' ',$arrayStrings);
}

$messages = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти. hello.';

$a = setUpperFisrsWord($messages);
echo $a;