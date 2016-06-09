<?php

namespace App\Exceptions;


class Error404 extends \Exception
{
    public function getErrMes()
    {
        return 'Данная страница ' . $this->getErrMes() . ' не найдена.';
    }
}