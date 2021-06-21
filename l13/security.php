<?php

require_once __DIR__ . '/helpers/response.php';
require_once __DIR__ . '/helpers/logs.php';

if (empty($_COOKIE['guest_id'])) {

    addUniqueUser(date('Y-m-d H:i:s ') . $_SERVER['REMOTE_ADDR'] . PHP_EOL);

    $byte = random_bytes(24);

    $hex = bin2hex($byte);
    setcookie('guest_id', $hex, time() + (3600 * 24 * 180));
}

session_start();

$isGuest = empty($_SESSION['user']);

if ($isGuest) {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (login($login, $password)) {
        redirect('index.php');
        exit();
    }

    require __DIR__ . '/auth.php';
    exit;
}

function login(string $login, string $password): bool
{

    $users = [
        [
            'login' => 'test@test.com',
            'password' => '$argon2id$v=19$m=65536,t=4,p=1$TXdNaUkyV3p0RmNvV0RoRw$8q8ek8LEymv/qcBr5Fa6LvWF9nxjaT8RvPPBHb7aAGo',
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

    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        return true;
    }

    return false;

}