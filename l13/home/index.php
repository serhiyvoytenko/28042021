<?php

require __DIR__ . '/header.php';
require __DIR__.'/browser.php';
require_once __DIR__.'/helpers/get-route.php';
//$route = getRoute();
$route= getRoute();
var_dump($route);
?>


    <main class="">
        <div class="container bg-light border rounded-3 p-3">
            <form action="action/create-dir.php?route=<?= $route ?>" method="post" class="row">
                <div class="col-8 p-3">
                    <label for="create-dir" class="d-none"></label>
                    <input type="text" name="directory" class="form-control" id="create-dir">
                </div>
                <div class="col-4 p-3">
                    <button type="submit" class="btn btn-success col-12">Create Directory</button>
                </div>
            </form>
            <form action="index.php" enctype="multipart/form-data" method="post" class="row">
                <div class="col-8 p-3">
                    <input type="file"
                           name="files[]"
                           multiple="multiple"
                           class="form-control">
                </div>
                <div class="p-3 col-4">
                    <button type="submit" class="btn btn-success col-12">Upload Files</button>
                </div>
            </form>
            <div class="row">
                <div class="col">
                    <a class="btn btn-success" href="index.php">Refresh</a>
                </div>
            </div>
        </div>
        <br>
        <div class="container bg-light border rounded-3 p-3">
            <?php foreach (getFilesList($route) as $links): ?>
            <ul>
                <li>
                    <a href="index.php?route=<?= $route.'/'.$links ?>"><?= $links ?></a>
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </main>


<?php

require __DIR__ . '/footer.php';