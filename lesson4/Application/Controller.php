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
            $this->action403();
            die;
        }
    }

    public function action($action)
    {
        $act = $action ?: static::$actionDefault;
        $this->methodName = 'action' . $act;
        $this->access();
        $methodName = $this->methodName;
        return $this->$methodName();
    }

    public function action403()
    {
        $this->view->error = 'Доступ закрыт';
        $this->view->display(__DIR__ . '/templates/403.php');
    }
}