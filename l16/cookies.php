<?php

setcookie('test', 123);
setcookie(111, 555, -1);
try {
    $byte = random_bytes(24);

} catch (Exception $e) {
}
$hex = bin2hex($byte);
var_dump($_COOKIE, $hex);