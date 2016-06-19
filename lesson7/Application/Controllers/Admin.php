<?php

namespace App\Controllers;

use App\Controller;
use App\Exceptions\Error404;
use App\Models\Article;
use App\MultiException;
use App\AdminDataTable;

class Admin extends Controller
{
    protected static $actionDefault = 'Base'; // Создаём свойство экшн по умолчанию для данного контроллера

    public function actionBase()
    {
        $table = new AdminDataTable(Article::findAll(),
            [
                'Id Новости' => function ($u) {
                    return $u->id;
                },
                'Заголовок' => function ($u) {
                    return 'Тема: ' . $u->title;
                },
                'Содержание' => function ($u) {
                    return $u->lead;
                },
                'Автор' => function ($u) {
                    return 'Id' . ($u->author_id ?? ' пусто') . ' - ' . ($u->author->author ?? 'Нет автора' );
                },
            ]
        );
        $this->view->table = $table->render();
        $this->view->display(__DIR__ . '/../templates/pages/admin.php');
    }

    public function actionInsert()
    {
        $this->view->display(__DIR__ . '/../templates/forms/insert.php');
    }

    public function actionEdit()
    {
        $this->view->data = Article::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../templates/forms/edit.php');
    }

    public function actionSave()
    {
        try {
            $article = new Article();
            $article->fill($_POST);
            $article->save();
            header('Location: /admin/');
        } catch (MultiException $e) {
            $this->view->errors = $e;
            $this->view->display(__DIR__ . '/../templates/forms/insert.php');
        }
    }

    public function actionDelete()
    {
        $article = Article::findById($_GET['id']);
        if (null == $article) {
            throw new Error404;
        }
        $article->delete();
        header('Location: /admin/');
    }

}