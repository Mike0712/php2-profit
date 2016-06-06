<?php

namespace App;


trait ArrayAccess

// Позволяет реализовывать интерфейс ArrayAccess, таким образом, что к объектам можно обращаться как к массивам

{
    function offsetExists($offset) // Определяем, существует ли ключ $offset
    {
        return isset($this->$offset);
    }

    function offsetUnset($offset) // Метод для удаления ключа
    {
        unset ($this->$offset);
    }

    function offsetSet($offset, $value) // Передаём значение ключу
    {
        $this->$offset = $value;
    }

    function offsetGet($offset) // Возвращаем значение ключа
    {
        return $this->$offset;
    }
}