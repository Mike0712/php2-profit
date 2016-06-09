<?php


namespace App;

use App\View;

abstract class Controller
{
    const DEFAULT_CTRL = 'Index';
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
            $this->view->error = 'Доступ закрыт';
            $this->view->display(__DIR__ . '/templates/pages/403.php');
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
}