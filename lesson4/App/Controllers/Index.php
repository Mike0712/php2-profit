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
}