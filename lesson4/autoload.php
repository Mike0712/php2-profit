<?php

function __autoload($class)
{
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if(is_readable($path)) {
        require $path;
    }
}