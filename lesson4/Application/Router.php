<?php

namespace App;


class Router
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
        if (is_readable(__DIR__ . '/../' . $parts[1]) || isset($_GET['ctrl'])) {
            $ctrl = $_GET['ctrl'] ?: 'News';
        }
        return $this->perform($ctrl, $parts);
    }

    protected function perform($ctrl, $parts)
    {
        $ctrlClass = '\App\Controllers\\' . ucfirst($ctrl);
        if(!class_exists($ctrlClass)){
            $view = new View();
            return $view->display(__DIR__ . '/templates/404.php');
        }
        $controller = new $ctrlClass();
        $action = $_GET['act'] ?: $parts[2] ?: $controller->actionDefault;
        $controller->action($action);
    }
}