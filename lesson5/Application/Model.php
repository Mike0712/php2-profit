<?php

namespace App;

abstract class Model implements \ArrayAccess
{
    use ArrayAccess;
    protected static $table;

    public $id;

    public static function findAll()
    {
        $db = Db::getParam();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

    public static function findById($id)
    {
        $db = Db::getParam();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE `id`=:id',
            [':id' => $id],
            static::class
        );
        return $data[0];
    }

    public static function findLast($quantity)
    { // В переменной передается количество последних новостей, которые требуется вывести
        $num = count(self::findAll()) - $quantity; // Определяем порядковый (не индексный) номер элемента массива где лежит начальный объект
        $id = self::findAll()[$num]->id; // Получаем номер id
        $db = Db::getParam();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE `id`>=:id',
            [':id' => $id],
            static::class
        );
        return $data;
    }

    public function fill($arr)
    {
        foreach ($arr as $k => $item) {
            $this->$k = trim(strip_tags($item));
            if (empty($arr[$k])) {
                $this->$k = null;
            }
        }
    }

    public function save() // Метод для сохранения новых или измененных записей
    {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function insert()
    {
        $props = [];
        $binds = [];
        $params = [];
        foreach ($this as $k => $v) { // Параметры для подстановки в запрос
            if ('id' == $k) {
                continue;
            }
            $props[] = $k;
            $binds[] = ':' . $k;
            $params[':' . $k] = $v;
        }
        // Сам запрос
        $sql = '
        INSERT INTO ' . static::$table . '
        (' . implode(', ', $props) . ')
        VALUES
        (' . implode(', ', $binds) . ')
        ';

        $db = Db::getParam();
        $db->execute($sql, $params);
        $this->id = $db->insertId();
    }

    public function update()    // Метод обновления новости
    {
        $pb = [];               // prop $ bind, подразумеваем, что в массиве будет лежать значение props=:bind
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $pb[] = $k . '=:' . $k;
            $params[':' . $k] = $v;
            $params[':id'] = $this->id;
        }
        $sql = '
        UPDATE ' . static::$table . '
        SET ' . implode(',', $pb) . '
        WHERE id=:id';

        $db = Db::getParam();
        $db->execute($sql, $params);
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $params[':id'] = $this->id;
        $db = Db::getParam();
        $db->execute($sql, $params);
    }
}