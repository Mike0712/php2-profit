<?php include __DIR__ . '/../standarts/head.php'; ?>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">Админ-панель</h1>


        </div>

        <hr>
        <h3>Редактировать новость</h3>
        <?php if (isset($errors)): ?>
            <?php foreach ($errors as $error): ?>
                <div class="alert alert-danger">
                    <?php echo $error->getMessage(); ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="col-sm-10 col-sm-offset-0 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <form class="form-group-sm" action="/admin/save/" method="post">
                    <input name="title" type="text" class="form-control" placeholder="Заголовок"
                           value="<?php echo $data['title']; ?>">
                    <br>
                    <textarea name="lead" class="form-control"
                              placeholder="Текст Новости"><?php echo $data['lead']; ?></textarea>
                    <br>
                    <input name="author_id" type="text" class="form-control" placeholder="Номер автора"
                           value="<?php echo $data['author_id']; ?>">
                    <input name="id" type="hidden" value="<?php echo $data['id'] ?>">
                    <br>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Править новость">

                </form>
            </div>
        </div>
    </div>
<?php include __DIR__ . '/../standarts/footer.php'; ?>