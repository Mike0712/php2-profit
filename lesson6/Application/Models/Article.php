<?php

namespace App\Models;

use App\Model;
use App\MultiException;

/**
 * Class Article
 * @package App\Models
 *
 * @property \App\Models\Article $author
 */
class Article extends Model
{
    protected static $table = 'news';

    public $title;
    public $lead;
    public $author_id;

    public function __get($prop)
    {
        if ($prop == 'author') {

            return Author::findById($this->author_id);

        } else {
            return null;
        }
    }

    public function __isset($prop)
    {
        if ($prop == 'author') {
            return true;
        } else return false;
    }

    public function fill($arr)
    {
        $errors = new MultiException();
        if (empty($arr['title'])) {
            $errors->add(new \Exception('Пустое поле заголовок'));
        }
        if (empty($arr['lead'])) {
            $errors->add(new \Exception('Пустое поле текст новости'));
        }
        if (0 != count($errors)) {
            throw $errors;
        }
        parent::fill($arr);
    }
}