<?php

$aert = [
    'name' => 'Serg',
    'age' => '40',
    'skills' => [
        [
            'language' => 'php',
            'exp' => '5+',
        ],
        [
            'language' => 'python',
            'exp' => '3+',
        ]
    ]
];

foreach ($aert as $key => $value) {
//    var_dump($key,$value);
    if (is_array($value)) {
        $value = serialize($value);
    }
    echo "{$key}: {$value}<br>";
}

$data = [1, 2, 3, 4, 5];
foreach ($data as &$value) {
    $value += 2;
}
//unset($value);
$value=100;
var_dump($data);