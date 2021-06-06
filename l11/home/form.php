<?php

if (isset($_GET['id'])) {
    $commentlist = require __DIR__ . '/comment-list.php';
    $id = $_GET['id'];
    $action = 'update.php?id=' . $id;
    $day = strstr($id, '/', true);
    $comment = substr(strstr($id, '/'), 1);
} else {
    $action = 'text-handler.php';
}


?>

<div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
        <div class="bg-light border rounded-3 p-3">
            <form action="title.php" method="get" id="select-day">
                <select class="form-select" name="select-day" form="select-day">
                    <option selected>Last DAY</option>
                    <option value="1">Last</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select><br>
                <button type="submit"  class="btn btn-danger" form="select-day">Select</button>
            </form>
<!--            --><?php //var_dump($_GET);?>
        </div>
        <div class="bg-light border rounded-3 p-3">
            <form name="guest-book" method="post" action="<?= $action ?>">
                <div class="mb-3">
                    <b>Your name:</b><br>
                    <label class="form-control">
                        <input name="my-name" class="form-control" required
                               value="<?= $commentlist[$day][$comment]['my-name'] ?? '' ?>">
                    </label>
                </div>
                <p>
                    <b>Your gender:</b><br><br>
                    <label>
                        <input type="radio" class="" name="gender" value="male" required
                            <?= (isset($commentlist[$day][$comment]['gender']) &&
                                $commentlist[$day][$comment]['gender'] === 'male') ? 'checked' : '' ?>>
                    </label> Man
                    <label>
                        <input type="radio" class="" name="gender" value="female" required
                            <?= (isset($commentlist[$day][$comment]['gender']) &&
                                $commentlist[$day][$comment]['gender'] === 'female') ? 'checked' : '' ?>>
                    </label> Woman
                </p>
                <p>
                    <b>Your program language:</b><br><br>
                    <label>
                        <select name="language">
                            <option value="php"
                                <?= (isset($commentlist[$day][$comment]['language']) &&
                                    $commentlist[$day][$comment]['language'] === 'php') ? 'selected' : '' ?>>PHP
                            </option>
                            <option value="c++" <?= (isset($commentlist[$day][$comment]['language']) &&
                                $commentlist[$day][$comment]['language'] === 'c++') ? 'selected' : '' ?>>C++
                            </option>
                            <option value="js" <?= (isset($commentlist[$day][$comment]['language']) &&
                                $commentlist[$day][$comment]['language'] === 'js') ? 'selected' : '' ?>>JS
                            </option>
                            <option value="java" <?= (isset($commentlist[$day][$comment]['language']) &&
                                $commentlist[$day][$comment]['language'] === 'java') ? 'selected' : '' ?>>JAVA
                            </option>
                            <option value="jquery" <?= (isset($commentlist[$day][$comment]['language']) &&
                                $commentlist[$day][$comment]['language'] === 'jquery') ? 'selected' : '' ?>>Jquery
                            </option>
                        </select>
                    </label>
                </p>
                <p class="mb-3"><b>Your comments:</b><br><br>
                    <label class="form-control">
                        <textarea name="text" class="form-control" rows="6"
                                  required><?= $commentlist[$day][$comment]['text'] ?? '' ?></textarea>
                    </label>
                </p>
                <p>
                    <button type="submit" class="btn btn-danger">SEND</button>
                </p>
            </form>
        </div>
    </div>
</div>