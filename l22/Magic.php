<?php

class Magic
{
    private array $bigArray = [];

    protected string $name = 'Vania';
    private int $age = 10;
    protected string $name2 = 'Peta';
    public string $name3 = 'Sonya';

    public function __get(string $key): mixed
    {
        return $this->bigArray[$key] ?? null;
    }

    public function __set(string $key, mixed $values) : void
    {
//        $this->$key = $values;
        $this->bigArray[$key] = $values;
    }

    public function __isset(string $key) : bool
    {
        return array_key_exists($key, $this->bigArray);
    }

    public function setValuesArray (string $key,mixed $values) : void
    {
        $this->bigArray[$key] = $values;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     */
    public function setNameName3(string $name3): void
    {
        $this->name3 = $name3;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __construct()
    {
        var_dump('I\'m created!');
    }


}

class Magic2 extends Magic
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

$ob2 = new Magic2();
$ob = new Magic();
var_dump($ob, $ob2);
echo $ob->getAge();
$ob2->setNameName3('Yulia');
var_dump($ob2);
$ob2->name3 = 'Sveta';
var_dump($ob2);
$ob2->name4 = 'Hi magic';
//$ob2->setValuesArray('newKey', 100);
var_dump($ob2->name4);
var_dump($ob2 instanceof Magic);
var_dump($ob2 instanceof Magic2);
