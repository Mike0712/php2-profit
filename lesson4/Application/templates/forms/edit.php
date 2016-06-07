<h3>Редактировать новости</h3>

<?php foreach ($all as $data): ?>

    <form action="/admin/save/" method="post">

        <input name="lead" type="text" value="<?php echo $data->lead ?>">

        <textarea name="title"><?php echo $data->title ?></textarea>

        <input name="id" type="hidden" value="<?php echo $data->id ?>">

        <input name="author_id" type="text" value="<?php echo $data->author_id ?>">

        <input type="submit" value="Обновить запись">

        <a href="/controllers/admin/delete/?id=<?php echo $data->id ?>">Удалить</a>

    </form>

<?php endforeach; ?>