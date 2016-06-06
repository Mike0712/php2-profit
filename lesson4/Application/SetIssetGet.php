<?php

namespace App;


trait SetIssetGet
{
    protected $data;

    public function __set($prop, $value) // Перехватываем данные с помощью магии
    {
        $this->data[$prop] = $value; // Кладем данные в массив $prop => $value
    }

    public function __isset($prop) // Делаем проверку с помощью магии
    {
        return isset($this->data[$prop]);
    }

    public function __get($prop) // Обратная операция, используется для чтения данных
    {
        return $this->data[$prop];
    }


}