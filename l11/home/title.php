<?php
require_once __DIR__ . '/header.php';
$comment = require __DIR__.'/comment-list.php';
?>

<?php
require_once __DIR__ . '/form.php';
?>
    <div class="container-fluid pb-3">
    <div class="bg-light border rounded-3 p-3">
        <?php
        var_dump($comment);
        ?>
    </div>
    </div>

<?php
require_once __DIR__ . '/footer.php';
?>