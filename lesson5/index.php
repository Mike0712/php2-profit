<?php

require __DIR__ . '/autoload.php';

$router = new \App\SefRouter();

$class = $router->route()['ctrl'];

if (!class_exists($class)) {
    $ctrl = new \App\Controllers\Index();
    return $ctrl->action404();
}

try {
    $ctrl = new $class();
    $ctrl->action($router->route()['action']);
} catch (\PDOException $e) {
    echo 'Ошибка нах: ' . $e->getMessage();
    die;
}