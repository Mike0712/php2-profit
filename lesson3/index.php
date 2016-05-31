<?php

require __DIR__ . '/autoload.php';
use App\Models\Article;

$news = Article::findAll();
$last = Article::findLast(3);

$view = new \App\View();

$view->news = $news;  // Присваиваем значение "несуществующему" свойству
$view->last = $last;
//var_dump($view->news); // Ага, свойство то оказывается существует

$view->display(__DIR__ . '/App/templates/news.php');