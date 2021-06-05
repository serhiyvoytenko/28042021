<?php

$days = scandir(__DIR__.'/storage');
$days = array_filter($days,function ($item){
    return (bool)preg_match('/\d{4}-\d{2}-\d{2}/',$item,$matches);
});
rsort($days);
$result =[];
foreach ($days as $day){
    $dir = __DIR__.'/storage/'.$day;
    $files = scandir(__DIR__.'/storage/'.$day);
    $files = array_filter($files, static fn($item)=>(bool)preg_match('/\d+_[a-f0-9]{32}\.log/',$item));


    $result[$day]=[];
    foreach ($files as $file){
        $comment = file_get_contents("{$dir}/{$file}");
        $comment = unserialize($comment);
        $comment['time']=substr($file,0,strpos($file,'_'));
//        $time = substr($file,0,strpos($file,'_'));
//        var_dump($files);
        $result[$day][$file]=$comment;

    }
    uasort($result[$day], fn(array $a, array $b) => $b['time']<=>$a['time']);
}
return $result;
//var_dump($result);