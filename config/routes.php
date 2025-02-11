<?php

use Core\Application;

/**
 * @var Application $app
 */

$app->router->add('/', function () {
    return 'Hello from home';
}, ['get', 'post']);

$app->router->get('/test', [\App\Controllers\HomeController::class, 'test']);
$app->router->post('/contact', [\App\Controllers\HomeController::class, 'contact']);

dump($app->router->getRoutes());