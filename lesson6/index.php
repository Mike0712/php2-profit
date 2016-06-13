<?php

require __DIR__ . '/autoload.php';

$router = new \App\SefRouter();

$class = $router->route()['ctrl'];

try {
    $ctrl = new $class();
    $ctrl->action($router->route()['action']);
} catch (\App\Exceptions\Db $e) {
    switch ($e->getCode()) {
        case 1:
            $error = 'Отсутствует соединение с базой данных';
            break;
        case 2:
            $error = 'Ошибка в запросе';
            break;
    }

    (new \App\Logger($e->getPrevious()))->write();

    $view = new \App\View();
    $view->error = $error;
    $view->display(__DIR__ . '/Application/templates/pages/support.php');
    die;
} catch (\App\Exceptions\Error404 $e) {
    (new \App\Logger($e, 'Страница не найдена'))->write();
    (new \App\View())->display(__DIR__ . '/Application/templates/pages/404.php');
}