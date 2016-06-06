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
        if (!method_exists($this, $this->methodName)) {
            return $this->action404();
        }
    }

    public function action($action)
    {
        $this->methodName = 'action' . ucfirst($action);
        $this->access();
        $methodName = $this->methodName;
        return $this->$methodName();
    }

    public function action404()
    {
        $this->view->error = 'Доступ закрыт';
        $this->view->display(__DIR__ . '/templates/404.php');
    }
}