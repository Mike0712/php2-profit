<?php

require __DIR__ . '/../classes/Db.php';

$db = new Db();
$db->execute('UPDATE `news` SET `title`=:title, `lead`=:lead WHERE news.id=:id', [':title'=>'Третья новость два', ':id'=>3, ':lead'=>'Новость 3']); // Тест обновления новости
