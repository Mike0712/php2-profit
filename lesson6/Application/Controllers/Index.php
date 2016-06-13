<?php

namespace App\Controllers;

use App\Models\Article;
use App\PathFinder;

class Index extends \App\Controller
{
    protected static $actionDefault = 'Default';

    public function actionDefault()
    {
        $news = Article::findAll();
        $last = Article::findLast(3);

        $this->view->news = $news;
        $this->view->last = $last;

        $this->view->displayTwig('index.html');
    }

    public function actionTest()
    {
        var_dump((new PathFinder(__DIR__ .'/../templates'))->find());die;
        $news = Article::findAll();
        $last = Article::findLast(3);

        $this->view->news = $news;
        $this->view->last = $last;

        $this->view->displayTwig('index.html');
    }
}