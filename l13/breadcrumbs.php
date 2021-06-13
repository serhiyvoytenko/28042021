<?php

/**
 * @var string $rout (From index.php)
 */

$routeArray = explode('/', $rout);
unset($routeArray[0]);
//var_dump($routeArray);
$fullPath = 'index.php?rout=';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            <?php foreach ($routeArray as $link): ?>
                <?php $fullPath .= '/'.$link; ?>
                /<a href="<?= $fullPath ?>"><?= $link ?></a>
            <?php endforeach; ?>
        </li>
    </ol>
</nav>