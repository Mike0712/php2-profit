<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;
use App\MultiException;

class Admin extends Controller
{
    protected static $actionDefault = 'Base'; // Создаём свойство экшн по умолчанию для данного контроллера
    public function actionBase()
    {
        $all = Article::findAll();
        $this->view->all = $all;
        $this->view->display(__DIR__ . '/../templates/admin.php');
    }

    public function actionSave()
    {
        try {
            $article = new Article();
            $article->fill($_POST);
            $article->save();
            header('Location: /admin/');
        } catch (MultiException $e){
            $this->view->errors = $e;
            $this->view->display(__DIR__ . '/../templates/forms/insert.php');
        }
    }

    public function actionDelete()
    {
        $article = Article::findById($_GET['id']);
        $article->delete();
        header('Location: /admin/');
    }

}