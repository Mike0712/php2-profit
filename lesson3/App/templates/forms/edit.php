<h3>Редактировать новости</h3>

<?php foreach (\App\Models\Article::findAll() as $data): ?>
    <form action="/App/actions/save.php" method="post">
        <input name="lead" type="text" value="<?=$data->lead?>">
        <textarea name="title"><?=$data->title?></textarea>
        <input name="id" type="hidden" value="<?=$data->id?>">
        <input type="submit" value="Обновить запись">
        <a href="/App/actions/delete.php?id=<?=$data->id?>">Удалить</a>
    </form>
<?php endforeach; ?>