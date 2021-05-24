<?php

while (true) {
    $input = readline('Enter number:');
    $values = 0;
    if (is_numeric($input)) {

        foreach (str_split($input) as $value) {
            $values += $value;
//            echo PHP_EOL;
        }
        echo $values . PHP_EOL;
    } else {
        echo 'Icorrect values!' . PHP_EOL;
    }
    $input2= readline('Tray again? y/n:');
    if (strtolower($input2)!=='y') {
        break;
    }
}