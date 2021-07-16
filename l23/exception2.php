<?php
function inverse($x) : float
{
if (!$x) {
throw new Exception('Деление на ноль.');
}
return 1/$x;
}

try {
echo inverse(5) . "\n";
echo inverse(0) . "\n";
} catch (Exception $e) {
echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}

// Продолжение выполнения
echo "Привет, мир\n";
