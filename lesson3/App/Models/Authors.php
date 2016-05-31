<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 31.05.2016
 * Time: 16:36
 */

namespace App\Models;

use \App\Model;

class Authors extends Model
{
    protected static $table = 'authors';

    public $author;
}