<?php

$array = range(1, 10);
shuffle($array);
//arsort($array);
var_dump($array);
sort($array);
var_dump($array);
$student = [
    ['name' => 'sveta',
        'age' => '22',
    ],
    ['name' => 'sveta2',
        'age' => 25,
    ],
    ['name' => 'sveta4',
        'age' => '20',
    ],
    ['name' => 'svet1',
        'age' => '32',
    ],
];

usort($student,static function ($a,$b){
    if ($a['age']>$b['age']){
        return 1;
    }
    if ($b['age']>$a['age']){
        return -1;
    }
    return 0;
});

var_dump($student);