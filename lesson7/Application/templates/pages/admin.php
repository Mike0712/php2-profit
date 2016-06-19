<?php include __DIR__ . '/../standarts/head.php'; ?>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">Админ-панель</h1>


            <h2><a href="/controllers/admin/insert">добавить новость</a></h2>


        </div>

        <hr>

        <?php
        $id = 0;
        while ($id < count($data['Id Новости'])):?>
            <div class="row">
                <?php foreach ($data as $title => $item): ?>
                    <div class="col-sm-2 col-sm-offset-0 blog-sidebar">
                        <div class="sidebar-module sidebar-module-inset">
                            <h4><?php echo $title; ?></h4>

                            <p><?php echo substr($item[$id], 0, 206); ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="col-sm-2 col-sm-offset-0 blog-sidebar">
                    <div class="sidebar-module sidebar-module-inset">
                        <h4>Действие</h4>

                        <p><a href="/controllers/admin/edit/?id=<?php echo $data['Id Новости'][$id] ?>">Редактировать</a></p>

                        <p><a href="/controllers/admin/delete/?id=<?php echo $data['Id Новости'][$id] ?>">Удалить</a></p>
                    </div>
                </div>
            </div>
            <?php $id++;
        endwhile; ?>

    </div>


<?php include __DIR__ . '/../standarts/footer.php'; ?>