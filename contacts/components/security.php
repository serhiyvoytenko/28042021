<?php

function security(string $url)
{
    $isGuest = empty($_SESSION['user']);
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (login($login, $password)) {
        redirect('/contacts/list');
        exit();
    }

    if ($isGuest && !in_array($url, config('guestAction'), true)) {
        redirect(config('loginUrl'));
    }
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