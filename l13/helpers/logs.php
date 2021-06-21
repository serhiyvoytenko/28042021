<?php

declare(strict_types=1);

function daylyDirLogs(): string
{
    $dirlogs = __DIR__ . '/../logs/';

    if (is_dir($dirlogs . date('Y-m-d'))) {
        return realpath($dirlogs . date('Y-m-d'));
    }

    mkdir($dirlogs . date('Y-m-d'));

    return realpath($dirlogs . date('Y-m-d'));
}

function addUniqueUser(string $info): void
{
    file_put_contents(
        daylyDirLogs() . '/unique_users.log',
        $info,
        FILE_APPEND
    );
}

function createLogs(string $route, string $userid): void
{
    file_put_contents(
        daylyDirLogs() . '/' . $userid . '.log',
        $_SERVER['REMOTE_ADDR'] . ' ' . $route . PHP_EOL,
        FILE_APPEND
    );
}