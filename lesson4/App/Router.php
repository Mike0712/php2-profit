<?php

namespace App;



class Router
{
    public $ctrl = 123;
    public function __construct()
    {
        return $this->route();
    }

    protected function route()
    {
        if(isset($_GET['ctrl'])){
            return $this->routeGet();
        }
        return $this->routeSef();
    }

    protected function routeSef()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);

        $ctrl = $parts[1] ?: 'News';
        if(is_readable(__DIR__ . '/../' . $parts[1])){ // Условие для того, чтобы можно было обращаться из броузера к
            return $this->routeGet();                   // файлам лежащим в корне, например к index.php
        }
        $ctrlClass = '\App\Controllers\\' . ucfirst($ctrl);
        $controller = new $ctrlClass;
        $action = $parts[2] ?: $controller->actionDefault;

        $controller->action($action);
    }

    protected function routeGet()
    {
        $ctrl = $_GET['ctrl'] ?: 'News';
        $ctrlClass = '\App\Controllers\\' . ucfirst($ctrl);
        $controller = new $ctrlClass;
        $action = $_GET['act'] ?: $controller->actionDefault;
        $controller->action($action);
    }
}