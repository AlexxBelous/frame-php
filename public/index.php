<?php
use Core\Application;
$startFrame = microtime(true);

if(PHP_MAJOR_VERSION < 8) {
    die('Require PHP version > 8');
}

require_once __DIR__ . "/../config/config.php";
require_once ROOT . "/vendor/autoload.php";
require_once HELPER . "/helpers.php";


$app = new Application();

















dump("Time: " . microtime(true) - $startFrame);