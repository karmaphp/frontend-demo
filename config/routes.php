<?php

$app->get('/', [\App\Controller\MainController::class, 'Index']);

$app->get('/hello/{name}', [\App\Controller\MainController::class, 'Hello']);

$app->get('/json', [\App\Controller\MainController::class, 'JsonResponse']);
$app->get('/xml', [\App\Controller\MainController::class, 'XmlResponse']);

$app->get('/smarty', [\App\Controller\MainController::class, 'SmartyResponse']);
$app->get('/twig', [\App\Controller\MainController::class, 'TwigResponse']);