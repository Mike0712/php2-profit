<?php

require __DIR__ . '/../classes/Db.php';

$db = new Db();
$db->execute('INSERT INTO `news`(`title`) VALUES (:title)', [':title'=>'Третья новость']); // Тест добавления новости