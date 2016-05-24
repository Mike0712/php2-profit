<?php

require __DIR__ . '/../classes/Db.php';
require __DIR__ . '/../classes/Model.php';
require __DIR__ . '/../models/Article.php';

$articles = Article::findAll();

$new = count($articles) -2; // Определяем номер первой новости в списке
while($new <= count($articles)): ?>

    <p><?=Article::finById($new)[0]->title?></p>
    <?php
    $new++;
endwhile;

// Плохой метод, т.к. работает при условии если нет пропусков id в таблице
?>

<hr/>

<?php

var_dump(Article::findLast(2));
