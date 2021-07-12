<?php

class Aclass
{

    public static string $table = 'table';

    public static function getNameClass(): array
    {
        return [self::class, static::$table];

    }
}

var_dump(Aclass::getNameClass());

class Bclass extends Aclass
{
    public static string $table = 'Not table';
}

var_dump(Bclass::getNameClass());