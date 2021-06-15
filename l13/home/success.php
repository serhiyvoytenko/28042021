<?php if (isset($_GET['success_messages'])): ?>
    <div class="alert alert-success">
        <?= $_GET['success_messages'] ?>
    </div>
<?php endif; ?>