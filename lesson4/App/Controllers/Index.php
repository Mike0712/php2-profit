<?php

namespace App\Controllers;

use App\Models\Article;

class Index extends \App\Controller
{
    public function actionDefault()
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