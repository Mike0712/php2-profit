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

    public static function getParam()
    {
        if (null===static::$param){
            static::$param = new static;
        }
        return static::$param;
    }
}