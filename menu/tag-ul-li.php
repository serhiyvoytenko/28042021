<?php

$menu = [
    ['title' => 'TITLE1', 'link' => '#1',],
    ['title' => 'TITLE2', 'link' => '#2',],
    ['title' => 'TITLE3', 'link' => '#3',],
];

$menu2 = [
    'title' => 'TITLE', 'link' => '#1',
];

$menu3 = [
    ['title' => 'TITLE1', 'link' => '#1',],
    ['title' => 'TITLE2', 'link' => '#2',],
    ['title' => 'TITLE3', 'link' => '#3',],
];

function create_menu($menu)
{
    if (is_array($menu)) {
        echo '<ul>';
        foreach ($menu as $values) {
            if (is_array($values)) {
                foreach ($values as $key2 => $value2) {
                    if ($key2 === 'link') {
                        $link = $value2;
                    } elseif ($key2 === 'title') {
                        $title = $value2;
                    }
                }
            } else {
                $link = $menu['link'];
                $title = $menu['title'];
            }
            echo '<li><a href="' . $link . '">' . $title . '</a></li>';
        }

        echo '</ul>';
    }
    return $menu;
}

create_menu($menu);