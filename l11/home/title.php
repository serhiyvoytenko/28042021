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
<!--            --><?php //foreach ($comment as $day => $value): ?>
            <?php $value=array_shift($comment) ?>
            <?php foreach ($value as $time => $values): ?>
                    <b><?= 'Создано: ' . date('Y-m-d H:i:s', stristr($time, '_', true)) ?></b><br>
                    <b><?= (isset($values['time'])) ? ('Отредактировано: ' . $values['time']).'<br>' : '' ?></b>
                    Пользователь: <b><?= $values['my-name'] ?></b><br>
                    Пол: <?= $values['gender'] ?? 'Не указан' ?><br>
                    Язык программирования: <?= $values['language'] ?><br>
                    <b>Комментарий:</b>
                    <p class="border rounded-3 p-3"><?= nl2br($values['text']) ?></p><br>
                    <a href="edit.php?id=<?= $values['id'] ?>" class="btn btn-warning">Edit</a>
                    <button onclick="document.location='delete.php?id=<?= $values['id'] ?>'" type="button" name="delete"
                            class="btn btn-danger">
                        Delete
                    </button>
                    <hr>
                <?php endforeach; ?>
<!--            --><?php //endforeach; ?>
        </div>
    </div>

<?php
require_once __DIR__ . '/footer.php';
?>