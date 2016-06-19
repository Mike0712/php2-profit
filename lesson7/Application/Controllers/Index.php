<?php

namespace App\Controllers;

use App\AdminDataTable;
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
        $news = Article::findByGen();
        $last = Article::findLast(3);

        $this->view->news = $news;
        $this->view->last = $last;

        $this->view->display(__DIR__ . '/../templates/pages/test.php');
    }
}