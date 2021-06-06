<?php

require __DIR__ . '/header.php';
?>
    <main class="container">
        <div class="alert alert-danger" role="alert">
            <?= $_GET['message']??'Server error. Try later' ?>
        </div>
    </main>

<script>
    setTimeout(function (){
        window.location.href='title.php';
    }, 5000)
</script>

<?php
require __DIR__ . '/footer.php';