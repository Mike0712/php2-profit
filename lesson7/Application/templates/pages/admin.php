<?php include __DIR__ . '/../standarts/head.php'; ?>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">Админ-панель</h1>


            <h2><a href="/controllers/admin/insert">добавить новость</a></h2>


        </div>

        <hr>
        <table class="table">
            <thead>
                <tr>
                    <?php foreach($table[0] as $title => $r): ?>
                        <th><?echo $title?></th>
                    <?php endforeach ?>
                        <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table as $row):?>
                    <tr>
                        <?php foreach($row as $cell): ?>
                            <td><?echo substr($cell, 0, 200)?></td>
                        <?php endforeach ?>
                            <td><p><a href="/controllers/admin/edit/?id=<?php echo $row['Id Новости'] ?>">Редактировать</a></p>
                                <p><a href="/controllers/admin/delete/?id=<?php echo $row['Id Новости'] ?>">Удалить</a></p></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>


<?php include __DIR__ . '/../standarts/footer.php'; ?>