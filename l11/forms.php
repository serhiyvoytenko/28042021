<?php

require __DIR__ . '/header.php';
$comments = require __DIR__ . '/comments-list.php';

?>

    <main class="container">
        <div class="bg-light p-5 rounded">

            <form action="comment-processor.php" method="post">
                <div class="mb-3">
                    <label id="username" for="username">Name</label>
                    <input type="text" name="username" class="form-control" id="username">

                </div>
                <div class="mb-3">
                    <label>Gender</label>
                    <input type="radio" name="gender" value="male" id="gender-male">
                    <label for="gender-male">Male</label>
                    <input type="radio" name="gender" value="female" id="gender-female">
                    <label for="gender-female">Female</label>
                </div>
                <div class="mb-3">
                    <label>Program Language
                        <select name="programing_language">
                            <optgroup label="backend">
                                <option>PHP</option>
                                <option>Java</option>
                                <option>C++</option>
                            </optgroup>
                            <optgroup label="fronend">
                                <option>JS</option>
                                <option>HTML</option>
                                <option>CSS</option>
                            </optgroup>
                        </select>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                </div>
                <button class="btn btn-success">Send</button>
                <?php require __DIR__ . '/comments-list.php' ?>
            </form>
        </div>
        <div>
            <?php foreach ($comments as $date => $commentsList): ?>
                <div class="alert alert-primary" role="alert">
                    <?= $date ?>
                </div>
                <table class="table table-striped">
                    <?php foreach ($commentsList as $file => $comment): ?>
                        <tr>
                            <td>
                                <b><?= $comment['username'] ?></b><br>
                                <?= $comment['gender'] ?? 'Unknown' ?><br>
                                <?= $comment['programing_language'] ?>
                            </td>
                            <td>
                                <b><?= date('F j, Y, H:i', $comment['time']) ?></b><br>
                                <?= nl2br($comment['text']) ?>
                                <div>
                                    <a href="edit.php?id=<?= $date . '/' . $file ?>"
                                       class="btn btn-sm btn-info">Edit</a>
                                    <a href="delete.php?id=<?= $date. '/'. $file ?>" class="btn btn-primary">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endforeach; ?>
        </div>
    </main>
<?php
require __DIR__ . '/footer.php';
?>