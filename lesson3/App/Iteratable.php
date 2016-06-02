<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 02.06.2016
 * Time: 8:29
 */

namespace App;


class Iteratable implements \Iterator
{
    private $position = 0;
    private $array = [
        'firstelement',
        'secondelement',
        'lastelement',
    ];

    public function rewind()
    {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current()
    {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    public function key()
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next()
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid()
    {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}