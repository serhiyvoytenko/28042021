<?php

declare(strict_types=1);

function success (string $location, string $messages): void
{
    $separator = getSeparator($location);
    redirect("{$location}{$separator}success_messages={$messages}");
}

function redirect(string $location): void
{
    header('Location: ' . $location);
    exit();
}

function getSeparator(string $location): string
{
    return str_contains($location, '?') ? '&' : '?';
}