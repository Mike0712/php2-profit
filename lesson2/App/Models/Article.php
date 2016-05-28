<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    protected static $table = 'news';

    public $id;
    public $title;
    public $lead;
}