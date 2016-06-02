<?php

include __DIR__ . '/head.php';
?>

    <!--Блок все новости-->
<header>
    <h1>Страница новостей</h1>
</header>
<div class="column-one">
    <div class="column-big">
        <h2>Все новости</h2>
            <?php
            foreach ($news as $article): ?>
                <article class="column-big-art">
                    <h3><?php echo $article['lead']; // ArrayAccess?></h3>

                    <p><?php echo $article['title']; // ArrayAccess?></p>

                    <p>Автор: <?php
                        if (!empty($article['author']['author'])) {
                            echo $article['author']['author'];
                        } else {
                            echo 'Нет автора';
                        } ?>
                    </p>
                    <a href="article.php?id=<?php echo $article['id'] // ArrayAccess?>">Перейти к новости</a>
                </article>
            <?php
        endforeach; ?>
    </div>

    <div class="column-middle">
        <!--    Блок 3 последние новости-->
        <h2>Три последние новости</h2>


        <?php
        foreach ($last as $one): ?>
            <article class="column-small">
                <p><a href="article.php?id=<?php echo $article['id'] // ArrayAccess?>"><?php echo $one['title'];// ArrayAccess ?></a></p>
            </article>
            <?php
        endforeach; ?>
    </div>
</div>
<?php include __DIR__ . '/footer.php';