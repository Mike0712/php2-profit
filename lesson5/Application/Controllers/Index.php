<?php

namespace App\Controllers;

use App\Models\Article;

class Index extends \App\Controller
{
    protected static $actionDefault = 'Default';

    public function actionDefault()
    {
        $news = Article::findAll();
        $last = Article::findLast(3);

        $this->view->news = $news;
        $this->view->last = $last;

        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    public function actionTest()
    {
        $ex = new \Exception('Some error');
        var_dump($ex);
        //throw $ex;
    }

}