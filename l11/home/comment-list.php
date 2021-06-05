<?php

$dir = __DIR__ . '/folder/';
$listfolderdate = scandir($dir);
$listfolderdate = array_filter($listfolderdate, static fn($date) => preg_match('/\d{4}-\d{2}-\d{2}/', $date));
arsort($listfolderdate);

foreach ($listfolderdate as $key => $day) {
    $listcomment = scandir($dir . $listfolderdate[$key]);
    $listcomment = array_filter($listcomment, static fn($name) => preg_match('/\d*_[a-f0-9]{32}.txt/', $name));

    uasort($listcomment, static fn($a, $b) => -($a <=> $b));

    foreach ($listcomment as $comment){
        $readcomment = file_get_contents($dir.$listfolderdate[$key].'/'.$comment);
        $readcommentarray = unserialize($readcomment);
        $time = stristr($comment,'_',true);
        $time = date('H:i:s', $time);
        $readcommenAll[$day][$time]=$readcommentarray;
    }


}
return $readcommenAll;
