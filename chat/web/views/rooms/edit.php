<?php

/**
 * @var string $roomTitle
 */

?>

<div class="container">
    <div class="row">
        <h6>
            Change title of room
        </h6>
        <form method="post">
            <label for="current-title">Current title</label>
            <input id="current-title" type="text" readonly placeholder="  <?= $roomTitle ?>"
                   class="form-control-plaintext form-control-sm form-control">
            <input type="text" name="newTitle" class="form-control mt-2 form-control-sm col-4"
                   placeholder="New title of room">
            <input type="submit" value="Send" class="btn btn-sm btn-success mt-2 col-2">
        </form>
    </div>
</div>
<div class="mt-5 container">
    <div class="row">
        <h6>
            Upload logo of room
        </h6>
        <form method="post" enctype="multipart/form-data">
            <input type="file" class="form-control mt-2 form-control-sm" name="logoRoom">
            <input type="submit" value="Upload logo" class="btn btn-sm btn-success mt-2 col-2">
        </form>
    </div>
</div>
<div class="mt-5 container">
    <div class="row">
        <div>
            <h6>
                Delete room
            </h6>
            <a href="/rooms/delete?roomId=<?= $_GET['roomId'] ?>" class="btn btn-sm btn-danger mt-2 col-2">Delete room</a>
        </div>
    </div>
</div>