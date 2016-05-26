<?php

require __DIR__ . '/../classes/Db.php';

$db = new Db();
$db->execute('INSERT INTO `news`(`title`, `lead`) VALUES (:title,:lead)',[':title'=>'Восьмая новость', ':lead'=>'Новость 8']); // Тест добавления новости