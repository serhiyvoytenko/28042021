<?php

$data = [
    ['title' => 'TITLE', 'link' => '/link'],
    ['title' => 'TITLE2', 'link' => '/link2'],
    ['title' => 'PARENT 1', 'children' => [
        ['title' => 'CHILD', 'link' => '/child-link'],
        ['title' => 'CHILD2', 'link' => '/child-link2'],
        ['title' => 'CHILD2', 'children' => [
            ['title' => 'CHILD', 'link' => '/child-link'],
            ['title' => 'CHILD2', 'link' => '/child-link2'],
        ],
        ],
    ]],
];

function getMenuHtml(array $data): string
{
    $html = '<ul>';
    foreach ($data as $row) {
        if (array_key_exists('children', $row)) {
            //TODO add code
        } else {
            $html .= "<li><a href='{$row['link']}'>{$row['title']}</a></li>";
        }
    }
    $html .= '</ul>';
    return $html;
}

echo getMenuHtml($data);

function power(int $number, int $power): int
{

}

$count = 0;
function fibonacci(int $n)
{
    static $storage = [];
    global $count;
    $count++;
    if (array_key_exists($n, $storage)) {
        return $storage[$n];
    }
    if ($n === 0 || $n === 1) {
        return $n;
    }


    $storage[$n] = fibonacci($n - 1) + fibonacci($n - 2);
    return $storage[$n];
}

$f = fibonacci(30);
var_dump($f, $count);