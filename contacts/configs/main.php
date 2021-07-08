<?php

function config(string $key, mixed $default = null): mixed
{
    $dir = dirname(__DIR__);
    $config = [
        'controllersRout' => "{$dir}/controllers",
        'modelsDir'=>"{$dir}/models",
        'defaultController'=>'index',
        'defaultAction'=>'index',
        'viewsRout' => "{$dir}/views",
        'layoutsRout' => "{$dir}/views/layouts",
        'existedVariablePrefix' => 'skillup',
        'loginUrl' => '/guest/login',
        'guestAction' => [
            '/guest/login',
            '/guest/registration',
        ],
        'db' => [
            'host' => 'db',
            'user' => 'skillup_user',
            'password' => 'skillup_pwd',
            'db_name' => 'skillup_db',
        ],
        'recordsOnPage'=>50,
    ];
    return $config[$key] ?? $default;
}