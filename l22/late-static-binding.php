<?php

class Aclass
{

    public static string $table = 'table';
    public string $human = 'italian';

    public static function getNameClass(): array
    {

        return [self::class, static::$table];

    }

    public function setNameHuman(string $newNameHuman):void
    {

    }


}

var_dump(Aclass::getNameClass());

class Bclass extends Aclass
{
    public static string $table = 'Not table';
}

var_dump(Bclass::getNameClass());

$a1 =  new Bclass();
$a2 = new Bclass();
$a3 = $a2;
$a4 = clone($a2);

var_dump($a1,$a2,$a3,$a4);