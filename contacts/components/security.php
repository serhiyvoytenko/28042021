<?php

function security(string $url)
{
    $guestActions = config('guestAction');

    $isGuest = empty($_SESSION['user']);
    if ($isGuest && !in_array($url, $guestActions, true)) {
        redirect(config('loginUrl'));
    }

    if (!$isGuest && in_array($url, $guestActions, true)) {
        redirect('/');
    }
}