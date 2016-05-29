<?php

require __DIR__ . '/Orderable.php';
require __DIR__ . '/Colors.php';

class Item
    implements Orderable
{

    use Colors;

    public $title;

    public function getPrice()
    {
        return 42;
    }

    public function getWeight()
    {
        return 100;
    }
}