<?php

$array_menu = [
    [
        'id' => 10,
        'parent' => 0,
        'title' => 'Computers',
        'link' => 'computers.php',
        'children' =>
           [
                [
                    'id' => 11,
                    'parent' => 10,
                    'title' => 'Laptop',
                    'link' => 'laptop.php',
                    'children' =>
                        [
                            [
                                'id' => 12,
                                'parent' => 11,
                                'title' => 'Asus',
                                'link' => 'asus.php',
                            ],
                            [
                                'id' => 13,
                                'parent' => 11,
                                'title' => 'Lenovo',
                                'link' => 'lenovo.php',
                            ],
                            [
                                'id' => 14,
                                'parent' => 11,
                                'title' => 'Xiaomi',
                                'link' => 'xiaomi.php',
                            ],
                            [
                                'id' => 15,
                                'parent' => 11,
                                'title' => 'Apple',
                                'link' => 'apple.php',
                            ],
                        ],
                ],
                [
                    'id' => 16,
                    'parent' => 10,
                    'title' => 'Tablets',
                    'link' => 'tablets.php',
                    'children' =>
                        [
                            [
                                'id' => 17,
                                'parent' => 16,
                                'title' => 'Xiaomi',
                                'link' => 'xiaomi.php',
                                'children' =>
                                    [
                                        [
                                            'id' => 18,
                                            'parent' => 17,
                                            'title' => 'White',
                                            'link' => 'white.php',
                                        ],
                                        [
                                            'id' => 19,
                                            'parent' => 17,
                                            'title' => 'Black',
                                            'link' => 'black.php',
                                        ],
                                    ],
                            ],
                            [
                                'id' => 20,
                                'parent' => 16,
                                'title' => 'Lenovo',
                                'link' => 'lenovo.php',
                                'children' =>
                                    [
                                        [
                                            'id' => 21,
                                            'parent' => 20,
                                            'title' => 'White',
                                            'link' => 'white.php',
                                        ],
                                        [
                                            'id' => 22,
                                            'parent' => 20,
                                            'title' => 'Black',
                                            'link' => 'black.php',
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
        'link' => 'dresses.php',
        'title' => 'Clothes',
        'children' =>
            [
                [
                    'id' => 24,
                    'parent' => 23,
                    'title' => 'Dresses',
                    'link' => 'dresses.php',
                ],
                [
                    'id' => 25,
                    'parent' => 23,
                    'title' => 'Chirts',
                    'link' => 'chirts.php',
                ],
                [
                    'id' => 26,
                    'parent' => 23,
                    'title' => 'Coats',
                    'link' => 'coats.php',
                ],
            ],
    ],
    [
        'id' => 27,
        'parent' => 0,
        'title' => 'Sport',
        'link' => 'sport.php',
        'children' =>
            [
                [
                    'id' => 28,
                    'parent' => 27,
                    'title' => 'Boats',
                    'link' => 'boats.php',
                ],
                [
                    'id' => 29,
                    'parent' => 27,
                    'title' => 'Bicycle',
                    'link' => 'bicycle.php',
                ],
            ],
    ],
    [
        'id' => 30,
        'parent' => 0,
        'title' => 'About',
        'link' => 'about.php',
        'children'=>[
            'title'=>'Email US',
            'link'=>'email.php',
        ],
    ],
];

$data = [
    ['title' => 'TITLE', 'link' => '/link'],
    ['title' => 'TITLE2', 'link' => '/link2'],
    ['title' => 'PARENT 1', 'children' => [
        ['title' => 'CHILD', 'link' => '/child-link'],
        ['title' => 'CHILD2', 'link' => '/child-link2'],
    ]],
];

$menu = [
    ['title' => 'TITLE1', 'link' => '#1',],
    ['title' => 'TITLE2', 'link' => '#2',],
    ['title' => 'TITLE3', 'link' => '#3', 'children' => [
        'title' => 'TITLE_children', 'link' => '#3', 'children' => [
            'title' => 'TITLE_children2', 'link' => '#4', 'children' => [
                'title' => 'TITLE_children3', 'link' => '#5',
            ],
        ],
    ]],
];

$menu2 = [
    'title' => 'TITLE', 'link' => '#1', 'children' => [
        'title' => 'TITLE_children', 'link' => '#3', 'children' => [
            'title' => 'TITLE_children2', 'link' => '#4', 'children' => [
                'title' => 'TITLE_children3', 'link' => '#5',
            ],
        ],
    ],
];

$menu3 = [
    ['title' => 'TITLE1', 'link' => '#1',],
    ['title' => 'TITLE2', 'link' => '#2',],
    ['title' => 'TITLE3', 'link' => '#3',],
];

function recursive_link($menu)
{
    if (array_key_exists('title', $menu) && array_key_exists('link', $menu)) {
        echo '<ul><li><a href="' . $menu['link'] . '">' . $menu['title'] . '</a></li>';

        if (array_key_exists('children', $menu) && count($menu['children']) > 0) {
            recursive_link($menu['children']);
            echo '</ul>';
        }
    } else {
        echo '<ul>';
        foreach ($menu as $value) {
            if (array_key_exists('title', $value) && array_key_exists('link', $value)) {
                echo '<li><a href="' . $value['link'] . '">' . $value['title'] . '</a></li>';
            }
            if (array_key_exists('children', $value) && count($value['children']) > 0) {
                recursive_link($value['children']);
            }
        }
        echo '</ul>';
    }
}

recursive_link($menu);
echo '</ul>';
