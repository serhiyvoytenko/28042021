<?php

$array = [
    'html', 'css', 'php', 'js', 'jq',
];

foreach ($array as $value) {
    echo $value . '<br>';
}

$array2 = [
    1, 20, 15, 17, 24, 35,
];


echo '<hr>';

$result = 0;
foreach ($array2 as $value) {
    $result += $value;
}
echo $result . '<hr>';

$result = 0;
$array3 = [
    26, 17, 136, 12, 79, 15,
];
foreach ($array3 as $value) {
    $result += $value ** 2;
}
echo $result . '<hr>';


$arr = [
    'green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой',
];
foreach ($arr as $key => $value) {
    echo $key . '<br>';
}
foreach ($arr as $value) {
    echo $value . '<br>';
}
echo '<hr>';

$arr = [
    'Коля' => 200, 'Вася' => 300, 'Петя' => 400,
];
foreach ($arr as $key => $value) {
    echo $key . ' - зарплата ' . $value . ' долларов.' . '<br>';
}
echo '<hr>';

$arr = [
    'green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой',
];
$en = [];
$ru = [];
foreach ($arr as $key => $value) {
    $en[] .= $key;
    $ru[] .= $value;
}
var_dump($en, $ru);
echo '<hr>';

$arr = [
    2, 5, 9, 15, 0, 4,
];
foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        echo $value . '<br>';
    }
}
echo '<hr>';

$arr = [
    1, 2, 3, 4, 5, 6, 7, 8, 9,
];
$a = '';
foreach ($arr as $value) {
    $a .= $value;
}
var_dump($a);
$a = '';
$i = 1;
while ($i < 10) {
    $a .= $i;
    $i++;
}
var_dump($a);
$a = '';
for ($i = 1; $i < 10; $i++) {
    $a .= $i;
}
var_dump($a);
echo '<hr>';

for ($i = 1; $i < 101; $i++) {
    echo $i . '<br>';
}
$i = 1;
while ($i < 101) {
    echo $i . '<br>';
    $i++;
}
echo '<hr>';

for ($i = 11; $i <= 33; $i++) {
    echo $i . '<br>';
}
$i = 11;
while ($i <= 33) {
    echo $i . '<br>';
    $i++;
}
echo '<hr>';

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo $i . '<br>';
    }
}
$i = 0;
while ($i <= 100) {
    if ($i % 2 === 0) {
        echo $i . '<br>';
    }
    $i++;
}
echo '<hr>';
$num = 0;
for ($n = 1000; $n >= 50; $n /= 2) {
    $num++;
}
echo $num . '<br>';
$n = 1000;
$num = 0;
while ($n >= 50) {
    $num++;
    $n /= 2;
}
echo $num . '<hr>';

for ($i = 1; $i <= 10; $i++) {
    for ($n = 1; $n <= 10; $n++) {
        echo $i . ' * ' . $n . ' = ' . $i * $n . '<br>';
    }
    echo '<br>';
}
echo '<hr>';

$arr = [
    4, 2, 5, 19, 13, 0, 10,
];
$e = [
    2, 3, 5.
];
$flag = false;
foreach ($arr as $value) {
    foreach ($e as $item) {
        if ($item === $value) {
            $flag = true;
            break 2;
        }
    }
}
echo $flag ? 'YES' : 'NO';
echo '<hr>';

$arr = [
    4, 2, 5, 19, 13, 0, 10,
];
$count = 0;
foreach ($arr as $value) {
    $count++;
}
echo $count;
echo '<hr>';

$arr = [
    1, 2, 3, 4, 5, 6, 7, 8, 9,
];
foreach ($arr as $value) {
    if (!($value % 3 === 0)) {
        echo $value . ',';
    } else {
        echo $value . '<br>';
    }
}
echo '<hr>';

$year = [
    'January', 'February', 'March', 'April', 'May', 'June', 'Jule', 'August', 'September', 'October', 'November', 'December',
];
$mounth = 'May';
foreach ($year as $value) {
    echo $value === $mounth ? '<b>' . $value . '</b><br>' : $value . '<br>';
}
echo '<hr>';

$week = [
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
];
$weekends = [
    'Saturday', 'Sunday',
];
foreach ($week as $value) {
    $flag = false;
    foreach ($weekends as $weekend) {
        if ($value === $weekend) {
            $flag = true;
            break;
        }
    }
    echo $flag ? '<b>' . $value . '</b><br>' : $value . '<br>';
}
echo '<hr>';

$day = 'sunday';
foreach ($week as $value) {
//    $flag=false;
    if (strtolower($value) === $day) {
        echo '<i>' . $value . '</i><br>';
    } else {
        echo $value . '<br>';
    }
}
echo '<hr>';
$x = '';
for ($i = 0; $i < 20; $i++) {
    echo $x .= 'x';
    echo '<br>';
}
echo '<hr>';

for ($i = 1; $i <= 9; $i++) {
    echo str_repeat($i, $i) . '<br>';
}
echo '<hr>';

$x = 'xx';
for ($i = 1; $i < 10; $i++) {
    echo str_repeat($x,$i);
    echo '<br>';
}
echo '<hr>';
