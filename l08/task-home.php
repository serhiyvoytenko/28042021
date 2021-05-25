<?php

$arr = [];
for ($i = 0; $i < 25; $i++) {
    $arr[] = random_int(1, 100);
}

$count1 = 1;


foreach ($arr as $key => $value) {
    if ($value > 0 && $key !== 0 && $key % 2 === 0) {
        $count1 *= $value;
    }
    if ($value > 0 && $key % 2 !== 0) {
        echo $value, '<br>';
    }
}

var_dump($arr, $count1);
echo '<hr>';

$rows = 10;
$cols = 10;
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');
echo '<table>';
for ($i = 0; $i < $rows; $i++) {
    echo '<tr>';
    for ($a = 0; $a < $cols; $a++) {
        echo '<td bgcolor="' . $colors[array_rand($colors)] . '" height="30px">';
        echo random_int(100000, 999999);
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';

echo '<table>';
for ($i = 0; $i <= 5; $i += 5) {
    echo '<tr>';
    for ($a = 1; $a <= 5; $a++) {
        echo '<td bgcolor="#faebd7" >';
        for ($g = 1; $g <= 10; $g++) {
            echo $a+$i . ' * ' . $g . ' = ' . ($a+$i) * $g . '<br>';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';