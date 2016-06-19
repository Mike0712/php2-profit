<?php

namespace App;


class AdminDataTable
{
    protected $models;
    protected $func;

    public function __construct(array $models, array $func)
    {
        $this->models = $models;
        $this->func = $func;
    }

    public function render()
    {
        foreach ($this->func as $k => $column) {
            foreach ($this->models as $item) {
                $cells[$k][] = $column($item);
            }
        }
        return $cells;
    }
}