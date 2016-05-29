<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $cf = new Config();
        $config = $cf->data;
        $connection = $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new \PDO($connection, $config['user'], $config['password']);
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

    public function insertId()
    {
        return $this->dbh->lastInsertId();
    }
}