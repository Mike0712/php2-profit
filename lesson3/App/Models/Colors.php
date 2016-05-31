<?php

namespace App\Models;

trait Colors
{

    public $color;

    public function getColorTitle()
    {
        switch ($this->color) {
            case 'red':
                return 'красный';
            case 'blue':
                return 'синий';
        }
    }

}