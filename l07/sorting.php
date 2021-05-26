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

usort($student, static function ($a, $b) {
    if ($a['age'] > $b['age']) {
        return 1;
    }
    if ($b['age'] > $a['age']) {
        return -1;
    }
    return 0;
});

var_dump($student);
echo '<hr>';


echo '<hr>';

// Функция сравнения
function cmp($a, $b): int
{
    if ($a === $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Сортируемый массив
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
echo '<pre>';
print_r($array);
echo '</pre>';

// Сортируем и выводим получившийся массив
uasort($array, 'cmp');
echo '<pre>';
print_r($array);
echo '</pre>';

sort($array);
echo '<pre>';
print_r($array);
echo '</pre>';

asort($array);
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<hr>';
$array2 = [
    10, 20,
    [
        10, 20,
        [
            10, 20, 30,
        ],
    ],
];
var_dump($array2);

array_walk_recursive($array2, static function (&$value) {
//    echo $key,' => ',$value,'<br>';
    $value *= 2;
    echo $value, '<br>';
//    return $value;
});
var_dump($array2);
