<?php

use App\Models\Article;

$article = Article::findById($_GET['id']);
?>

<h3><?=$article->lead?></h3>
<p><?=$article->title?></p>
