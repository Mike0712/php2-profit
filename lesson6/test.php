<?php
require __DIR__ . '/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/Application/templates/pages');
$twig = new Twig_Environment($loader, []);

echo $twig->render('index.html');