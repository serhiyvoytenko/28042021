<?php
$new = [1, 2, 3];
$old = array(1, 2, 3);
var_dump($new, $old);

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

$big = [
    'one'=>[
        'two'=>[
            'three'=>[
                'four'=>[
                    'five'=>[
                        'six',
                    ],
                ],
            ],
        ],
    ],
];
var_dump($big);

var_dump($aert);
unset($old[1]);
var_dump($old);