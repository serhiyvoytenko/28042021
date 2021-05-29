<?php

declare(strict_types=1);

$data = [
    ['title' => 'TITLE', 'link' => '/link',],
    ['title' => 'TITLE2', 'link' => '/link2',],
    ['title' => 'PARENT 1', 'children' => [
        ['title' => 'CHILD', 'link' => '/child-link',],
        ['title' => 'CHILD2', 'link' => '/child-link2',],
        ['title' => 'CHILD2', 'children' => [
            ['title' => 'CHILD', 'link' => '/child-link',],
            ['title' => 'CHILD2', 'link' => '/child-link2',],
            ['title' => 'PARENT 1', 'children' => [
                ['title' => 'CHILD', 'link' => '/child-link',],
                ['title' => 'CHILD2', 'link' => '/child-link2',],
                ['title' => 'CHILD2', 'children' => [
                    ['title' => 'CHILD', 'link' => '/child-link',],
                    ['title' => 'CHILD2', 'link' => '/child-link2',],
                ],
                ],
            ],
            ],
        ],
        ],
    ],
    ],
];

function getMenuHtml(array $data): string
{
    $html = '<ul>';
    foreach ($data as $row) {
        if (array_key_exists('children', $row)) {
            $html .= "<li>{$row['title']}";
            $html .= getMenuHtml($row['children']);
            $html .= "</li>";
        } else {
            $html .= "<li><a href='{$row['link']}'>{$row['title']}</a></li>";
        }
    }
    $html .= '</ul>';
    return $html;
}

echo getMenuHtml($data);
echo '<hr>';

function power(int $number, int $power): float
{
    if ($power === 0) {
        return 1;
    }
    if ($power === 1) {
        return $number;
    }
    if ($power < 0) {
        return 1 / ($number * power($number, abs($power) - 1));
    }
    return $number * power($number, $power - 1);
}

echo power(5, 2);
echo '<br>';

//$count = 0;
function fibonacci(int $n)
{
//    static $count2 = 0;
//    $count2++;
    static $storage = [];
//    var_dump($storage, $count2);
//    global $count;
//    $count++;
    if (array_key_exists($n, $storage)) {
        return $storage[$n];
    }
    if ($n === 0 || $n === 1) {
//        var_dump($count2);
        return $n;
    }


    $storage[$n] = fibonacci($n - 1) + fibonacci($n - 2);
    return $storage[$n];
}

echo '<hr>';
$number_fib = 26;
$start_fib_array = microtime(true);
$f = fibonacci($number_fib);
$end_fib_array = microtime(true);
$time_fib_array = $end_fib_array - $start_fib_array;
//var_dump($f, $count, $time_fib_array);
echo 'Time with array: ', $time_fib_array, '<br>';
echo 'Element ', $number_fib, ' = ', $f, '<br>';
//echo 'Count: ', $count;

echo '<hr>';

//$count2 = 0;
function fibonaci(int $n): int
{
//    static $count = 0;
//    global $count2;
//    $count2++;
//    $count++;
//    var_dump($count);
    if ($n === 0 || $n === 1) {
//        var_dump($count);
        return $n;
    }
    return fibonaci($n - 1) + fibonaci($n - 2);
}

$start_fib_ = microtime(true);
$f = fibonaci($number_fib);
$end_fib_ = microtime(true);
$time_fib_ = $end_fib_ - $start_fib_;
echo 'Time with array: ', $time_fib_, '<br>';
echo 'Element ', $number_fib, ' = ', $f, '<br>';
//echo 'Count: ', $count2;

function fibon_array(int $number): float
{
    static $sum=[];
    if(array_key_exists($number,$sum)){
        return $sum[$number];
    }
    if($number===0||$number===1){
        return $number;
    }
    $sum[$number]=fibon_array($number-1)+fibon_array($number-2);
    return $sum[$number];
}

echo '<hr>';
echo fibon_array($number_fib);