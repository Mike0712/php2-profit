<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;
$article = Article::findById($_GET['id']);

$view = new \App\View();
$view['article'] = $article; // Большой привет от ArrayAccess

$view->display(__DIR__ . '/App/templates/article.php');