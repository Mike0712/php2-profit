<?php

require __DIR__ . '/../../../autoload.php';

$article = new \App\Models\Article();
$article->id = $_GET['id'];
$article->delete();

header('Location: /admin.php');