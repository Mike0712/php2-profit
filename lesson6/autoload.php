<?php

spl_autoload_register(
    function ($class) {
        $vendorName = 'Application';
        $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
        $path = str_replace('App', $vendorName, $path);
        if (is_readable($path)) {
            require $path;
        }
    }
);

require __DIR__ . '/vendor/autoload.php';