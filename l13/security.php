<?php

session_start();

$isGuest = empty($_SESSION['user']);
if ($isGuest) {
    $login = $_POST['login'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($login && $password) {
//        var_dump($login, $password);
        login($login, $password);
        exit();
    } else {
        require_once __DIR__ . '/auth.php';
        exit;
    }
}

function login(string $login, string $password)
{
    $users = [
    [
      'login'=>'test@test.com',
      'password'=>'123123',
    ],
    ];
    $filtered = array_filter(
        $users,
        static fn(array $user)=>($login===$users['login']&&$password===$users['password'])
    );


}
//var_dump($isGuest);