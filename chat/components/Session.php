<?php


namespace components;


class Session
{
    public function __construct()
    {
        session_start();
    }

    public function set(string $key, mixed $value): void
    {
//        var_dump($key,$value,$_SESSION);
        $_SESSION[$key] = $value;

    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $_SESSION[$key] ?? $default;
    }

    public function reset(): void
    {
        $_SESSION = [];
        session_destroy();
        session_start();
    }

}