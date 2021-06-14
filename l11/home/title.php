<?php
require_once __DIR__ . '/header.php';
$comment = require __DIR__ . '/comment-list.php';
$selectday = $_GET['select-day'] ?? array_key_first($comment);
require_once __DIR__ . '/form.php';
?>
    <div class="container-fluid pb-3">
        <div>
            <form action="title.php" method="get" id="select-day" name="changedate">
                <label for="select-day"></label>
                <select class="form-select" name="select-day" form="select-day" onchange="document.changedate.submit()" id="select-day">
                    <?php foreach ($comment as $daylist => $commentslist): ?>
                        <option value="<?= $daylist ?>" <?= (isset($selectday) && $selectday === $daylist) ? 'selected' : '' ?>><?= $daylist ?></option>
                    <?php endforeach; ?>
                </select><br>
<!--                <button type="submit" class="btn btn-danger" form="select-day">Select</button>-->
            </form>
            <br>
        </div>
        <div class="bg-light border rounded-3 p-3">
            <?php foreach ($comment[$selectday] as $time => $values): ?>
                <b><?= 'Создано: ' . date('Y-m-d H:i:s', strstr($time, '_', true)) ?></b><br>
                <b><?= (isset($values['time'])) ? ('Отредактировано: ' . $values['time']) . '<br>' : '' ?></b>
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
        </div>
    </div>

<?php
require_once __DIR__ . '/footer.php';
?>