<?php

/*
 * Simple calculator
 * Supported arithmetic operators *,/,+,-,%
 * Operator * for cli must be escaped \
 * Use with space: number { \* | + | - | / } number
 */

const ERROR_ = PHP_EOL . 'Error. Use with space: number1 { \* | + | - | / } number2. Operator * for cli must be escaped \\' . PHP_EOL;


if ($argc === 4 && is_numeric($argv[1]) && is_numeric($argv[3]) && strlen($argv[2]) === 1) {
    list(, $operand1, $operator, $operand2) = $argv;
} else {
    exit(ERROR_);
}

if ($operand2 == 0) exit('Division by zero is prohibited'.PHP_EOL);

switch ($operator) {
    case '+':
        echo $operand1 + $operand2, PHP_EOL;
        break;
    case '*':
        echo $operand1 * $operand2, PHP_EOL;
        break;
    case '-':
        echo $operand1 - $operand2, PHP_EOL;
        break;
    case '/':
        echo $operand1 / $operand2, PHP_EOL;
        break;
    case '%':
        echo $operand1 % $operand2, PHP_EOL;
        break;
    default:
        exit(ERROR_);
}
