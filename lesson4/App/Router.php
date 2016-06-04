<?php

namespace App;


class Router
{
    protected $ctrl;
    protected $act;
    public function __construct($ctrl, $act)
    {
        $this->ctrl = $ctrl;
        $this->act = $act;
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

        $ctrl = $parts[1] ?: $this->ctrl  ?: 'News';
        $action = $parts[2] ?: $this->act ?: 'All';

        $ctrlClass = '\App\Controllers\\' . ucfirst($ctrl);
        $controller = new $ctrlClass;
        $controller->action($action);
    }

    protected function routeGet()
    {
        $ctrl = $_GET['ctrl'] ?: 'News';
        $action = $_GET['act'] ?: 'All';

        $ctrlClass = '\App\Controllers\\' . ucfirst($ctrl);
        $controller = new $ctrlClass;
        $controller->action($action);
    }
}