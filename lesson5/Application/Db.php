<?php

namespace App;

class Db
{
    use \App\Singleton;

    protected $dbh;

    protected function __construct()
    {
        $config = Config::getParam()->data;
        $connection = $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'];
        try {
            $this->dbh = new \PDO($connection, $config['user'], $config['password']);
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new \App\Exceptions\Db(null, 1, $e);
        }
    }

    public function query($sql, $params = [], $class = '')
    {
        $sth = $this->dbh->prepare($sql);
        try {
            $sth->execute($params); // Проверка например не пришёл массив с подстановками, либо наоборот лишний код SQLSTATE[HY093]
        } catch (\PDOException $e) {
            throw new \App\Exceptions\Db(null, 2, $e);
        }

        if (empty($class)) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function execute($query, $params = [])  // Метод для INSERT, UPDATE
    {
        $sth = $this->dbh->prepare($query);
        try {
            $res = $sth->execute($params);
        } catch (\PDOException $e) {
            throw new \App\Exceptions\Db('', 2, $e);
        }
        return $res;
    }

    public function insertId()
    {
        return $this->dbh->lastInsertId();
    }
}