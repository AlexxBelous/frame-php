<?php

use Core\Application;

/**
 * @var Application $app
 */

$app->router->get('/', [\App\Controllers\HomeController::class, 'index']);

