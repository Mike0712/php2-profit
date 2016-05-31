<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    protected static $table = 'news';

    public $title;
    public $lead;
    public $author_id;
}