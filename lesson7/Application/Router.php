<?php

namespace App;


class Router
{
    protected $data;

    public function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode('/', $url);
        $ctrl = $parts[1] ?: 'News';
        if (is_readable(__DIR__ . '/../' . $parts[1]) || isset($_GET['ctrl'])) {
            $ctrl = $_GET['ctrl'] ?: 'News';
        }
        $action = $_GET['act'] ?: $parts[2];
        $this->data['ctrl'] = '\App\Controllers\\' . ucfirst($ctrl);
        $this->data['action'] = ucfirst($action);
        return $this->data;
    }
}