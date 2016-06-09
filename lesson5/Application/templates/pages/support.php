<?php include __DIR__ . '/../standarts/head.php' ?>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">Упс!</h1>
            <p class="lead blog-description"><?php echo $error;?></p>
        </div>

        <div class="row">

            <div class="col-sm-8 blog-main">
                    <div class="blog-post">

                        <h2 class="blog-post-title">Что то пошло не так</h2>

                        <p>Произошла следующая ошибка: <?php echo $error;?></p>
                        <p>Приносим свои извинения!</p>
                        <p>Наша служба технической поддержки уже занимается её устранением. Попробуйте зайти позже</p>

                        <p class="blog-post-meta"><a href="/index.php">Перейти на главную</a></p>

                    </div>


            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>О курсе</h4>
                    <p>Учебный курс PHP-2 Академии программирования Profit</p>
                </div>
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
