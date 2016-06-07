<?php

require __DIR__ . '/autoload.php';

$router = new \App\Router(); // Вызываем маршрутизатор
$class = $router->route()['ctrl']; // Получаем данные для создания контроллера

if (!class_exists($class)) { // Проверяем наличие контроллера
    $ctrl = new \App\Controllers\Index();
    return $ctrl->action404(); // Если нет, то вызываем страницу 404
}
$ctrl = new $class(); // Создаём контроллер
$ctrl->action($router->route()['action']);  // Вызываем страницу. Если в адресной строке не ввести экшн, то будет вызван
                                            // экшн конкретного контроллера по умолчанию (\App\Controller.php#L32)