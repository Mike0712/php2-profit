<?php

require __DIR__ . '/../autoload.php';

use App\Models\Article;

$article = new Article;
// Запрос для INSERT
//$article->title = 'Марсианин съел бомжа';
//$article->lead = 'Сенсация в Чухломе!';
//$article->save();

// Запрос для UPDATE
//$article->title = 'Марсианин съел бомжа';
//$article->lead = 'Сенсация в Чухломе и Чичилме!';
//$article->id = 5;
//$article->save();

// Запрос для DELETE
$article->id =8;
$article->delete();

echo $article->id;