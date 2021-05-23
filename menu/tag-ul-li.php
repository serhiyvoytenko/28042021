<?php

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
                echo '</ul>';
            }
        }
        echo '</ul>';
    }
}

recursive_link($data);

