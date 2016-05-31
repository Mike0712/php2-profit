<?php

include __DIR__ . '/head.php';
?>

<!--Блок все новости-->

<h1>Страница новостей</h1>
<h2>Все новости</h2>
<?php
foreach ($news as $article): ?>
    <article>
        <h3><?php echo $article->lead; ?></h3>

        <p><?php echo $article->title ?></p>

        <p>Автор: <?php
            if (!empty($article->author->author)) {
                echo $article->author->author;
            } else {
                echo 'Нет автора';
            } ?>
        </p>
        <a href="article.php?id=<?php echo $article->id ?>">Перейти к новости</a>
    </article>
    <?php
endforeach; ?>

<!--    Блок 3 последние новости-->
<h2>Три последние новости</h2>

<?php
foreach ($last as $one): ?>
    <article>
        <p><?php echo $one->title; ?></p>
    </article>
    <?php
endforeach;
?>
</body>
</html>
