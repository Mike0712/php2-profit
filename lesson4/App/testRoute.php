<?php

namespace App;


class testRoute
{
    public function __construct()
    {
        return $this->route();
    }

    protected function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $ctrl = $parts[1] ?: 'News';
        if(is_readable(__DIR__ . '/../' . $parts[1]) || isset($_GET['ctrl'])){
            return $this->routeGet();
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