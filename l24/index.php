<?php

use app\models\UsersModels as UModels;
use app\new_models\UsersModels as NUModels;
use components\StringsArray;
use strings\LongString;

require_once __DIR__.'/Autoloader.php';

$globalLoader = new Autoloader(__DIR__);
$helpersLoader = new Autoloader(__DIR__.DIRECTORY_SEPARATOR.'helpers');

spl_autoload_register([$globalLoader, 'load']);
spl_autoload_register([$helpersLoader, 'load']);

$usersModels = new UModels();
$usersModels->testTrait();
$newUsersModels = new NUModels();
$stringsArray = new StringsArray();
$mathFunction = new MathFunction();
$longString = new LongString();
var_dump(
    $longString,
    $globalLoader,
    $usersModels,
    $newUsersModels,
    $stringsArray,
    $mathFunction
);
