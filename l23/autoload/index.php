<?php

$loader = static function (string $class) {
    $class = str_replace('_', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
    if (!file_exists($file)) {
        throw new RuntimeException("Class $class can not be loaded");
    }
//var_dump($file);
    require_once $file;
};

spl_autoload_register($loader);

try {
    $b = new components_ContactModel();
} catch (Exception $exception) {
    var_dump($exception);
}




var_dump(spl_autoload_functions());
//spl_autoload_unregister($loader);
//var_dump(spl_autoload_functions());

$contact = new models_ContactModel();
//$contactComponent = new components_ContactModel();
$user = new models_UserModel();
//$controller = new controllers_UsersController();
//
var_dump($user, $contact);
