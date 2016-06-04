<?php

namespace App;

use App\View;

abstract class Controller
{
    /**
     * @var \App\View
     *
     */
    protected $view;
    protected $methodName;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function access()
    {
        $methodName = $this->methodName;
        if (!method_exists($this, $this->methodName)) {
            return $this->action404();
        }
        return $this->$methodName();
    }

    public function action($action)
    {
        $this->methodName = 'action' . ucfirst($action);

        return $this->access();
    }

    public function action404()
    {
        $this->view->display(__DIR__ . '/templates/404.php');
    }
}