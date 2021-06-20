<?php

require_once __DIR__ . '/helpers/response.php';

session_start();

$isGuest = empty($_SESSION['user']);

if ($isGuest) {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (login($login, $password)) {
        redirect('index.php');
        exit();
    } else {
        require __DIR__ . '/auth.php';
        exit;
    }
}

function login(string $login, string $password): bool
{

    $users = [
        [
            'login' => 'test@test.com',
            'password' => '$argon2id$v=19$m=65536,t=4,p=1$L1ExdXk5VDZseFFoRG1zOQ$+MWRlD3DxPKsbFMJJr1RPFgyep7tQeVqK77CKzzpABw',
        ],
    ];

    $filtered = array_filter(
        $users,
        static fn(array $user) => ($login === $user['login'])
    );

    if (!$filtered || count($filtered) > 1) {
        return false;
    }

    $user = current($filtered);

    if (password_verify($password, $user['password'])){
        $_SESSION['user'] = $user;
        return true;
    }

    return false;

}