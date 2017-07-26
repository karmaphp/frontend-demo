<?php

require_once 'vendor/autoload.php';

define('ROOT_DIR', __DIR__);

$container = \App\Base\Container::build(
    require_once 'config/container.php'
);

$app = new \Karma\App($container);

require_once 'config/routes.php';

$app->run();
