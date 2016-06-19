<?php

namespace App\Exceptions;


class Db extends \Exception
{
    public function getMesErr()
    {
        return 'Ошибка базы данных. [Номер ошибки ' . $this->getCode() . ']';
    }
}