<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Article;

class News extends Controller
{
    public $actionDefault = 'All'; // Создаём свойство экшн по умолчанию для данного контроллера
    public function actionAll()
    {
        $news = Article::findAll();
        $last = Article::findLast(3);

        $this->view->news = $news;
        $this->view->last = $last;

        $this->view->display(__DIR__ . '/../templates/news.php');
    }

    public function actionArticle()
    {
        $article = Article::findById($_GET['id']);

        $this->view->article = $article;

        $this->view->display(__DIR__ . '/../templates/article.php');
    }
}