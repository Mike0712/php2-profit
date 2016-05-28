<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=php2', 'root', '');
    }

    public function query($sql, $params = [], $class = '')
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        if (empty($class)) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function execute($query, $params=[])  // Метод для INSERT, UPDATE
    {
        $sth = $this->dbh->prepare($query);
        $res = $sth->execute($params);
        return $res;
    }
}