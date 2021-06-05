<?php
require_once __DIR__ . '/header.php';
$comment = require __DIR__ . '/comment-list.php';
//var_dump($comment);
?>

<?php
require_once __DIR__ . '/form.php';
?>
    <div class="container-fluid pb-3">
        <div class="bg-light border rounded-3 p-3">
            <?php foreach ($comment as $day => $value): ?>
                <?php foreach ($value as $time => $values): ?>
                    <b>Создано: <?= $day.' '.$time ?></b><br>
                    <b>Отредактировано: <?= $day.' '.$time ?></b><br>
                    Пользователь: <?= $values['my-name'] ?><br>
                    Пол: <?= $values['gender'] ?><br>
                    Язык программирования: <?= $values['language'] ?><br>
                    Описание:<br><?= $values['text'] ?>
                    <hr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>

<?php
require_once __DIR__ . '/footer.php';
?>