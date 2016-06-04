<?php

require __DIR__ . '/../autoload.php';

use App\Models\Article;
use App\Models\Author;

$authors = Author::findAll();
$article = Article::findAll();
var_dump($authors);
var_dump($article);