<?php

namespace App;


class SefRouter
{
    public function __construct()
    {
        return $this->route();
    }

    protected function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = array_diff(explode('/', $url), ['']);
        foreach ($parts as $part) {
            $elm[] = ucfirst($part);
        }
        $last = array_pop($elm);
        $ctrl = implode('\\', $elm) ?: '\App\Controllers\News';
        if (count($parts)==1) {
            $ctrl = '\App\Controllers\\' . ucfirst($_GET['ctrl']) ?: '\App\Controllers\News';
        }
        return $this->perform($ctrl, $last);
    }

    protected function perform($ctrl, $last)
    {
        $controller = new $ctrl();
        $action = $_GET['act'] ?: $last ?: $controller->actionDefault;
        $controller->action($action);
    }
}