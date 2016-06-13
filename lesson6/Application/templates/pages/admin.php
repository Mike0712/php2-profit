<?php include __DIR__ . '/../standarts/head.php'; ?>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Админ-панель</h1>


        <h2><a href="/controllers/admin/insert">добавить новость</a></h2>


    </div>

    <hr>
    <?php foreach ($all as $item): ?>
        <div class="row">
            <div class="col-sm-3 col-sm-offset-0 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>Заголовок</h4>

                    <p><?php echo $item['title']; ?></p>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-0 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>Содержание</h4>

                    <p><?php echo substr($item['lead'], 0, 206); ?></p>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-0 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>Автор</h4>

                    <p>
                        <?php
                        if (!empty($item['author']['author'])) {
                            echo $item['author']['author'];
                        } else {
                            echo 'Нет автора';
                        } ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-2 col-sm-offset-0 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>Действие</h4>

                    <p><a href="/controllers/admin/edit/?id=<?php echo $item->id ?>">Редактировать</a></p>

                    <p><a href="/controllers/admin/delete/?id=<?php echo $item->id ?>">Удалить</a></p>
                </div>
            </div>

        </div>
    <?php endforeach ?>

</div>

<?php include __DIR__ . '/../standarts/footer.php'; ?>