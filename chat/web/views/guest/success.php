<?php

/**
 * @var array $errors
 */

?>
<main class="form-signin">
    <h1 class="h3 mb-3 fw-normal">User create success!</h1>
    <p>Please <a href="/guest/login">login</a> or redirect over 5 sec.</p>
    <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y') ?></p>
</main>
<script>
    setTimeout(function () {
        window.location.href = 'login.php'; // the redirect goes here

    }, 5000);
</script>