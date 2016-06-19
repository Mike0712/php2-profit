<?php

namespace App;


class SefRouter
{
    const DEFAULT_CONTROLLER = 'Index';
    protected $data;

    public function route()
    {
        $url = $_SERVER['REQUEST_URI'];
        $parts = array_diff(explode('/', $url), ['']); // Удаляем пустые элементы
        switch (count($parts)) {
            case 0:
                $ctrl = '\App\Controllers\News';
                break;
            case 1: // Для GET параметров
                if (is_readable(__DIR__ . '/../' . $parts[1]) || isset($_GET['ctrl']) || isset($_GET['page'])) {
                    $controller = ucfirst($_GET['ctrl']) ?: 'News';
                    $action = ucfirst($_GET['act']);
                } else {
                    $controller = ucfirst($parts[1]) ?: 'News';
                }
                $ctrl = '\App\Controllers\\' . $controller;
                break;
            case 2: // Для обычных адресов типа /ctrl/act/
                $controller = ucfirst($parts[1]) ?: 'News';
                $action = ucfirst($parts[2]);
                $ctrl = '\App\Controllers\\' . $controller;
                break;
            default: // Для длинных адресов вида /folder/ctrl/act/ и /folder/folder/ctrl/act/ и т.д.
                array_unshift($parts, 'App');
                foreach ($parts as $part) {
                    $elm[] = ucfirst($part);
                }
                $action = array_pop($elm);
                if (!empty($_GET)) {
                    $action = array_pop($elm);
                }
                $ctrl = implode('\\', $elm);
        }
        if (!class_exists($ctrl)) {
            $ctrl = '\App\Controllers\Index';
            $action = true; // Для того, чтобы не пройти проверку actionAccess
        }

        $this->data['ctrl'] = $ctrl;
        $this->data['action'] = $action;
        return $this->data;
    }
}