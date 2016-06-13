<?php

namespace App;


class MultiException extends \Exception
    implements \ArrayAccess, \Countable, \IteratorAggregate
{
    protected $errors = [];

    public function add($value)
    {
        $this->errors[] = $value;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($this->errors, $offset);
    }

    public function offsetGet($offset)
    {
        return $this->errors[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->errors[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->errors[$offset]);
    }

    public function Count()
    {
        return count($this->errors);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->errors);
    }
}