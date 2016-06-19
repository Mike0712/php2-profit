<?php

namespace App;


class AdminDataTable
{
    protected $models;
    protected $func;

    public function __construct($models, array $func)
    {
        $this->models = $models;
        $this->func = $func;
    }

    public function render()
    {
        foreach ($this->func as $k => $column) {
            foreach ($this->models as $m => $item) {
                $cells[$m][$k] = $column($item);
            }
        }
        return $cells;
    }
}