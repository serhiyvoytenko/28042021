<?php

require_once __DIR__.'/vendor/autoload.php';

$config = array_merge(
  require __DIR__.'/config/general.php',
  require __DIR__.'/config/cli.php',
);

$app = App::run($config);