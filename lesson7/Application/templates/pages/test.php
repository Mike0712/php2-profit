<?php include __DIR__ . '/../standarts/head.php' ?>
<?php include __DIR__ . '/../standarts/menu.php' ?>


    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">Учебный новостной сайт</h1>
            <p class="lead blog-description">Курс PHP-2</p>
        </div>

        <div class="row">

            <div class="col-sm-8 blog-main">

                <?php foreach($news as $article): ?>

                    <div class="blog-post">

                        <h2 class="blog-post-title"><?php echo $article['title'];?></h2>
                        <?php if (!empty($article['author']['author'])):?>
                            <p>Автор: <?php echo $article['author']['author'];?></p>
                        <?php else: ?>
                        <p><?php echo 'Нет автора'; ?>
                            <?php endif; ?>
                        <p class="blog-post-meta">Узнать больше <a href="/controllers/news/article/?id=<?php echo $article['id']?>">Перейти к новости</a></p>

                        <p><?php echo $article['lead'];?></p>
                    </div><!-- /.blog-post -->
                <?php endforeach; ?>



                <nav>
                    <ul class="pager">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </nav>

            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>О курсе</h4>
                    <p>Учебный курс PHP-2 Академии программирования Profit</p>
                </div>
                <div class="sidebar-module">
                    <h4>Три последних новости</h4>
                    <ol class="list-unstyled">
                        <?php foreach ($last as $one): ?>
                            <li><a href="/controllers/news/article/?id=<?php echo $article['id']?>"><?php echo $one['title'];?></a></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Ссылки</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://github.com/Mike0712/php2-profit">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div><!-- /.container -->

<?php include __DIR__ . '/../standarts/footer.php';