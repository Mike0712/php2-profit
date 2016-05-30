<?php

require __DIR__ . '/HasWeight.php';

interface Orderable
    extends HasWeight
{

    public function getPrice();

}