<?php

require __DIR__ . '/autoload.php';

$router = new \App\SefRouter();

$class = $router->route()['ctrl'];

try {
    $ctrl = new $class();
    $ctrl->action($router->route()['action']);
} catch (\App\Exceptions\Db $e) {
    $ctrl = new \App\Controllers\Index();
    switch ($e->getCode()) {
        case 1:
            $error = 'Отсутствует соединение с базой данных';
            break;
        case 2:
            $error = 'Ошибка в запросе';
            break;
    }
    $ctrl->NotificationSupport($error);
} catch (\App\Exceptions\Error404 $e) {
    $ctrl = new \App\Controllers\Index();
    $ctrl->action404();
}