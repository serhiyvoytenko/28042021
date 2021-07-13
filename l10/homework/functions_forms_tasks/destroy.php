<?php session_start() ?>
<!DOCTYPE HTML>
<html lang="EN">
<head>
    <meta charset="utf-8">
    <title>Закрыть сессию</title>
</head>
<body>
<h1>Сессия закрыта</h1>
<a href="14.php">Создать сессию</a>
</body>
</html>
<?php
//setcookie(session_name(), session_id(), time()-3600);
session_destroy();
?>
