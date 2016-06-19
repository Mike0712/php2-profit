<?php

namespace App;


class PathFinder
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function find()
    {
        $names = scandir($this->path);
        unset($names[0], $names[1]);
        foreach ($names as $item) {
            if(is_dir($this->path . '/' . $item)) {
                $loader[] = $this->path . '/' . $item;
            }
        }
        return $loader;
    }
}