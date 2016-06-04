<?php

namespace App;

use App\View;

abstract class Controller
{
    /**
     * @var \App\View
     */
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}