<?php

require __DIR__ . '/../autoload.php';

$it = new \App\Iteratable();

print_r(var_dump($it));

foreach($it as $k=>$value){
    var_dump($k,$value);
}