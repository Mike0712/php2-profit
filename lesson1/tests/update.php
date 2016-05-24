<?php

require __DIR__ . '/../classes/Db.php';

$db = new Db();
$db->execute('UPDATE `news` SET `title`=:title WHERE news.id=:id', [':title'=>'Третья новость раз', ':id'=>3]); // Тест обновления новости
