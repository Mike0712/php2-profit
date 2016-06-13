<?php

namespace App;


trait Singleton
{
    protected static $param;

    protected function __construct()
    {

    }

    public static function getParam()
    {
        if (null === static::$param) {
            static::$param = new static;
        }
        return static::$param;
    }
}