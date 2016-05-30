<?php

use App\Models\Article;

$articles = Article::findAll();
$last = Article::findLast(3); // Указываем в скобках интересующее нас количество
//var_dump($articles);
//var_dump($last);
?>

    <!--Переведём в более пристойный вид-->

    <h3>Все новости</h3>
<?php
foreach ($articles as $article): ?>
    <p><?=$article->title;?></p>
    <a href="article.php?id=<?=$article->id?>">Перейти к новости</a>
    <?php
endforeach;
?>

    <h3>Три последние новости</h3>

<?php
foreach ($last as $one): ?>
    <p><?=$one->title;?></p>
    <?php
endforeach;