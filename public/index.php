<?php
$startFrame = microtime(true);

if(PHP_MAJOR_VERSION < 8) {
    die('Require PHP version > 8');
}

















print_r("Time: " . microtime(true) - $startFrame);