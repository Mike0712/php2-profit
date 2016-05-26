<?php

// Проверка вывода одной новости

require __DIR__ . '/../classes/Db.php';
require __DIR__ . '/../classes/Model.php';
require __DIR__ . '/../models/Article.php';

var_dump(Article::findById(1));
var_dump(Article::(1));