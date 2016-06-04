<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class Admin extends Controller
{
    public function actionAll()
    {
        $all = Article::findAll();
        $this->view->all = $all;
        $this->view->display(__DIR__ . '/../templates/admin.php');
    }

    public function actionEdit()
    {
        $article = new Article();
        foreach($_POST as $k => $value){
            $article[$k] = $_POST[$k];
            if(empty($_POST[$k])){
                $article[$k] = null;
            }
        }
        $article->save();

        header('Location: /admin/all');
    }

    public function actionDelete()
    {
        $article = new Article();
        $article->id = $_GET['id'];
        $article->delete();

        header('Location: /admin/all');
    }

}