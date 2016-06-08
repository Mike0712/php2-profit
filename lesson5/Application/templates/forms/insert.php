<h3>Добавить новость</h3>
    <?php if (isset($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <div class="alert alert-danger">
                <?php echo $error->getMessage(); ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
<form action="/admin/save/" method="post">
    <input name="lead" type="text">
    <br>
    <textarea name="title"></textarea>
    <br>
    <input name="author_id" type="text">
    <br>
    <input type="submit" value="Опубликовать новость">
</form>