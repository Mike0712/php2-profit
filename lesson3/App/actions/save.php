<?php
require __DIR__ . '/../../autoload.php';

$article = new \App\Models\Article();
$article->title = $_POST['title'];
$article->lead = $_POST['lead'];
$article->id = $_POST['id'];
$article->author_id = $_POST['author_id'] ?: null;
$article->save();

header('Location: /admin.php');