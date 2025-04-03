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

$app->router->get('/post/(?P<slug>[a-z0-9-]+)/?', function () {
    return '<p>Some post</p>';
});

dump($app->router->getRoutes());