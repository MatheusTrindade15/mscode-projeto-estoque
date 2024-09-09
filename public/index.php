<?php

require_once '../vendor/autoload.php';
require_once './routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = rtrim($uri, '/');

foreach ($router['routes'] as $route => $controller) {
    if ($uri === $route) {
        $controller = new $controller();
        $controller->index($_REQUEST);
        exit;
    }
}

$notFoundController = new $router['default']();
$notFoundController->index($_REQUEST);