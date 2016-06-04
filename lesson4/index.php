<?php

require __DIR__ . '/autoload.php';
// Код для ЧПУ, если подключен .htaccess
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$ctrl = $parts[1] ?: 'Index';
$action = $parts[2] ?: 'Default';

//if (isset($_GET['page'])) {
//    $parts = explode('/', $_GET['page']);
//    $ctrl = $parts[0];
//    $action = $parts[1];
//} else {
//    $ctrl = 'Index';
//    $action = 'Default';
//}

$ctrlClass = '\App\Controllers\\' . ucfirst($ctrl);
$controller = new $ctrlClass;

$actionMethodName = 'action' . ucfirst($action);
$controller->$actionMethodName();