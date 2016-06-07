<?php

function __autoload($class)
{
    $vendorName = 'Application';
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    $path = str_replace('App', $vendorName, $path);
    if(is_readable($path)) {
        require $path;
    }
}