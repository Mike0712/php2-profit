<?php

abstract class Model
{

    protected static $table;

    public static function findAll()
    {
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

    public static function findById($id){
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE `id`=:id',
            [':id'=> $id],
            static::class
        );
        return $data[0];
    }

    public static function findLast($quantity){ // В переменной передается количество последних новостей, которые требуется вывести
        $num = count(self::findAll()) - $quantity; // Определяем порядковый (не индексный) номер элемента массива где лежит начальный объект
        $id = self::findAll()[$num]->id; // Получаем номер id
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE `id`>=:id',
            [':id'=> $id],
            static::class
        );
        return $data;
    }
}