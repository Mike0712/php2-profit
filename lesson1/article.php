

<?php

    require __DIR__ . '/classes/Db.php';
    require __DIR__ . '/classes/Model.php';
    require __DIR__ . '/models/Article.php';

$article = Article::findById($_GET['id']);
?>

<h3><?=$article->lead?></h3>
<p><?=$article->title?></p>
