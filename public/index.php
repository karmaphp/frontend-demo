<?php

use App\Base\Container;
use Karma\AppFactory;
use Karma\ContainerBuilder;

// vendor'ü yükleyelim
require_once 'vendor/autoload.php';

// kök dizini daha sonra kullanmak için kaydedelim
define('ROOT_DIR', __DIR__ . '/..');

$container = ContainerBuilder::build(
    Container::class,
    require_once ROOT_DIR . '/config/container.php'
);

$app = AppFactory::create($container);

require_once ROOT_DIR . '/config/routes.php';

$app->run();
