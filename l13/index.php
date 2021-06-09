<?php

require __DIR__ . '/header.php';

?>

    <main class="container">
        <div class="bg-light p-5 rounded">
            <form method="post" class="row" action="action/create-dir.php">
                <div class="col-8">
                    <label for="directory_name_input" class="d-none">text</label>
                    <input type="text"
                           name="dir_name"
                           class="form-control"
                           placeholder="Directory Name"
                           id="directory_name_input"
                    >
                </div>
                <button type="submit" class="btn btn-success col-4">Create Directory</button>
            </form>
        </div>
    </main>

<?php

require __DIR__ . '/footer.php';