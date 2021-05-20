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
    'one' => [
        'two' => [
            'three' => [
                'four' => [
                    'five' => [
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


$array_menu = [
    [
        'id' => 10,
        'parent' => 0,
        'title' => 'Computers',
        'childs' =>
            [
                [
                    'id' => 11,
                    'parent' => 10,
                    'title' => 'Laptop',
                    'childs' =>
                        [
                            [
                                'id' => 12,
                                'parent' => 11,
                                'title' => 'Asus',
                            ],
                            [
                                'id' => 13,
                                'parent' => 11,
                                'title' => 'Lenovo',
                            ],
                            [
                                'id' => 14,
                                'parent' => 11,
                                'title' => 'Xiaomi',
                            ],
                            [
                                'id' => 15,
                                'parent' => 11,
                                'title' => 'Apple'
                            ],
                        ],
                ],
                [
                    'id' => 16,
                    'parent' => 10,
                    'title' => 'Tablets',
                    'childs' =>
                        [
                            [
                                'id' => 17,
                                'parent' => 16,
                                'title' => 'Xiaomi',
                                'childs' =>
                                    [
                                        [
                                            'id' => 18,
                                            'parent' => 17,
                                            'title' => 'White',
                                        ],
                                        [
                                            'id' => 19,
                                            'parent' => 17,
                                            'title' => 'Black',
                                        ],
                                    ],
                            ],
                            [
                                'id' => 20,
                                'parent' => 16,
                                'title' => 'Lenovo',
                                'childs' =>
                                    [
                                        [
                                            'id' => 21,
                                            'parent' => 20,
                                            'title' => 'White',
                                        ],
                                        [
                                            'id' => 22,
                                            'parent' => 20,
                                            'title' => 'Black',
                                        ],
                                    ],
                            ],
                        ],

                ],
            ],
    ],
    [
        'id' => 23,
        'parent' => 0,
        'title' => 'Clothes',
        'childs' =>
            [
                [
                    'id' => 24,
                    'parent' => 23,
                    'title' => 'Dresses',
                ],
                [
                    'id' => 25,
                    'parent' => 23,
                    'title' => 'Chirts'
                ],
                [
                    'id' => 26,
                    'parent' => 23,
                    'title' => 'Coats'
                ],
            ],
    ],
    [
        'id' => 27,
        'parent' => 0,
        'title' => 'Sport',
        'childs' =>
            [
                [
                    'id' => 28,
                    'parent' => 27,
                    'title' => 'Boats'
                ],
                [
                    'id' => 29,
                    'parent' => 27,
                    'title' => 'Bicycle',
                ],
            ],
    ],
    [
        'id' => 30,
        'parent' => 0,
        'title' => 'About',
    ],
];

echo '<pre>';
print_r($array_menu);
echo '</pre>';