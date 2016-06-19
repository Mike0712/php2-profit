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
        $table = new AdminDataTable(Article::findAll(),
            [
                'Id Новости' => function ($u) {
                    return $u->id;
                },
                'Заголовок' => function ($u) {
                    return $u->title;
                },
                'Содержание' => function ($u) {
                    return $u->lead;
                },
                'Автор' => function ($u) {
                    return $u->author_id;
                },
            ]
        );
        $this->view->render = $table->render();
        $this->view->display(__DIR__ . '/../templates/pages/test.php');
    }
}