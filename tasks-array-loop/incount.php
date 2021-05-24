<?php

while (true) {
    $input = readline('Enter number:');
    $input_arr = explode(' ', $input);
    $counts = 0;
    if (count($input_arr) === 2 && is_numeric($input_arr[0]) && is_numeric($input_arr[1])) {
        foreach (str_split($input_arr[0]) as $value) {
            if ($value === $input_arr[1]) {
                $counts++;
            }
        }
        echo $counts . PHP_EOL;
    } else {
        echo 'Incorrect values!', PHP_EOL;
    }

    $input2 = readline('Tray again? y/n:');
    if (strtolower($input2) !== 'y') {
        break;
    }
}
