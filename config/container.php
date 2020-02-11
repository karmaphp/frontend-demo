<?php

use App\Service\SmartyService;
use App\Service\TwigService;
use function DI\get;

return [

    'twig'   => get(TwigService::class),
    'smarty' => get(SmartyService::class)

];