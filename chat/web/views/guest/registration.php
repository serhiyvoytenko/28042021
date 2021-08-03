<?php

/**
 * @var array $errors
 */

?>
<main class="form-signin">
    <form method="POST">
        <h1 class="h3 mb-3 fw-normal">Please register</h1>

        <div class="form-floating mb-3">
            <input type="text"
                   name="login"
                   class="form-control"
                   id="floatingInput"
                   placeholder="Login">
            <label class="mx-2" for="floatingInput">Login</label>
            <?php if (array_key_exists('login', $errors)): ?>
                <span class="text-danger"><?php echo $errors['login'] ?></span>
            <?php endif ?>
        </div>
        <div class="form-floating mb-3">
            <input type="password"
                   name="password"
                   class="form-control"
                   id="floatingPassword"
                   placeholder="Password">
            <label class="mx-2" for="floatingPassword">Password</label>
<!--            --><?php //if (array_key_exists('password', $errors)): ?>
<!--                <span class="text-danger">--><?php //echo $errors['password'] ?><!--</span>-->
<!--            --><?php //endif ?>
        </div>
        <div class="form-floating mb-3">
            <input type="password"
                   name="repeatPassword"
                   class="form-control"
                   id="floatingRepeatPassword"
                   placeholder="Repeat Password">
            <label class="mx-2" for="floatingRepeatPassword">Repeat Password</label>
            <?php if (array_key_exists('errorRegister', $errors)): ?>
                <span class="text-danger"><?php echo $errors['errorRegister'] ?></span>
            <?php endif ?>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <p>or <a href="/guest/login">login</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y') ?></p>
    </form>
</main>