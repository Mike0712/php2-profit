<?php

namespace App\Controllers;


use App\Controller;
use App\Exceptions\Error404;
use App\Models\Article;

class News extends Controller
{
    protected static $actionDefault = 'All'; // Создаём свойство экшн по умолчанию для данного контроллера

    public function actionAll()
    {
        $news = Article::findAll();
        $last = Article::findLast(3);

        $this->view->news = $news;
        $this->view->last = $last;
        $this->view->page = $_GET['page'] ?: 1; // Для реализации пагинации на главной

        $this->view->displayTwig('index.html');
    }

    public function actionArticle()
    {
        $article = Article::findById($_GET['id']);
        if (null === $article) {
            throw new Error404();
        }
        $last = Article::findLast(3);
        $news = Article::findAll();
        $this->view->article = $article;
        $this->view->last = $last;

        $this->view->displayTwig('article.html');
    }
}