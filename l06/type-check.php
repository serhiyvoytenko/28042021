<?php
declare(strict_types=1);

$var = '  123';
$var2 = 123.234;
var_dump(is_bool((bool)$var));
var_dump(isset($var));
var_dump(empty($var));
echo gettype($var);
var_dump((string)($var - $var2));

//define('KOOLAID', 'koolaid1');
$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice." . PHP_EOL;
echo "He drank some $juices[1] juice." . PHP_EOL;
echo "He drank some $juices[koolaid1] juice." . PHP_EOL;

class people
{
    public string $john = "John Smith";
    public string $jane = "Jane Smith";
    public string $robert = "Robert Paulsen";

    public string $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice." . PHP_EOL;
echo "$people->john then said hello to $people->jane." . PHP_EOL;
echo "$people->john's wife greeted $people->robert." . PHP_EOL;
echo "$people->robert greeted the two $people->smith.";
error_reporting(E_ALL);

class Square
{
    public int $width = 100;
    public string $name = 'Vasya';
}

$square = new Square();
$great = 'здорово';

// Не работает, выводит: Это { здорово}
echo "Это { $great} <br />";

// Работает, выводит: Это здорово
echo "Это {$great} <br />";

// Работает
echo "Этот квадрат шириной {$square->width}00 сантиметров.<br />";

$arr = array('key' => 'test key');
// Работает, ключи, заключённые в кавычки, работают только с синтаксисом фигурных скобок
echo "Это работает: {$arr['key']}<br />";

// Работает
$arr[4][3] = 'test 4-3';
echo "Это работает: {$arr[4][3]}";
var_dump($arr);

// Это неверно по той же причине, что и $foo[bar] вне
// строки. Другими словами, это по-прежнему будет работать,
// но поскольку PHP сначала ищет константу foo, это вызовет
// ошибку уровня E_NOTICE (неопределённая константа).
const foos = 4;
echo "Это неправильно: {$arr[foos][3]}<br />";

// Работает. При использовании многомерных массивов внутри
// строк всегда используйте фигурные скобки
$arr = array('foo' => array(3 => 'test foo'));
echo "Это работает: {$arr['foo'][3]}<br />";

// Работает.
echo "Это работает: " . $arr['foo'][3] . '<br />';

class Objects
{
    public array $values;
    public string $name='name';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }

}

$obj = new Objects();
$obj->values[3] = $square;
//var_dump($obj);
//echo $obj->values[3]->name;
echo "Это тоже работает: {$obj->values[3]->name}<br />";

$name = 'petya';
$$name = 'vanya';

echo "Это значение переменной по имени $name: {${$name}}<br />";
function getName(){
       return 'name';
}
echo "Это значение переменной по имени, которое возвращает функция getName(): {${getName()}}<br />";

echo "Это значение переменной по имени, которое возвращает \$obj->getName(): {${$obj->getName()}}<br />";

// Не работает, выводит: Это то, что возвращает getName(): {getName()}
echo "Это то, что возвращает getName(): {getName()}";
