<?php

namespace App;


class Config
{
    public $data;

    protected static $param;

    protected function __construct()
    {
        $this->data = include __DIR__ . '/../files/config.php';
    }

    use \App\Singleton;
}