Задание 1. В даном задании в первую очередь рассматривал исключения, которые уже брошены самим PHP, а именно его объектом класса
        PDOException. В нашем случае их ровно 3. А именно: 1. Ошибка соединения с базой данных (ситуация моделируется изменение любого из
        параметров конфига на ложный); 2. Ошибка в запросе метода DB:query($param) на стадии execute, когда программа исполняет код после
        подстановок. Моделирование ситуации: ситуация моделируется дописанием в запрос метода базовой модели FindById после WHERE чего-то
        вроде `lead` = :lead или внесения в массив еще одного элемента вроде ':lead' => 'lead') и при загрузке главной страницы уже увидим
        проблемы;
        3. Ошибка в запросе метода DB:execute так же на стадии исполнения. Для моделирования ситуации в модели достаточно испортить любой
        из методов insert update или delete в первом методе после формирования массива с запросом и подстановками достаточно добавить в массив
        ещё одно занчение например $DB:query($param) а в двух других сделать также как с FindById и возникает исключительная ситуация.
        Ловим, в catch выводим соответствующее сообщение через echo/
        Разумеется необходимо включить в PDO режим сообщений об ошибках PDO::setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION), в противном
        случае будут срабатывать ворнинги, а это не исключительная ситуация.

Задание 2.Для того, чтобы ловить исключения во фронт-контроллере во всех catch класса \App\DB мы снова бросаем исключение, но это уже исключение
        класса \App\Exception\Db, который пока ничего не возвращает, а только наследует от \Exception.
        Пойманное исключение и передаём на специальную страничку, вызвав view.

Задание 3. Бросил исключения в классах контроллеров. Первое в классе News методе actionArticle(). Бросить его раньше (напрмер в модели) совершенно не логично, т.к.
        мало ли для чего может быть использован метод модели FindById($id). Аналогично исключение было брошено в методе actionDelete() класса
        \App\Controllers\Admin.
        Ловил эти исключения, по условиям задания, также во фронт-контроллере. Так как у меня уже был создан во фронте try, окружающий
        я добавил еще один catch но уже для обработки ошибки исключения класса \App\Exceptions\Error404.
Задание 4. Метод fill был создан в базовой модели, однако для реализации мультиисключения метод fill нам нужен в Модели Article.
        Поэтому в модели Article я переопределеил метод fill, т.е. добавил код для реализации мультиисключения, затем при помощи оператора
        parent::fill($arr);

Задание 5. Сделал очень простецкий логгер, на сколько времени хватило. Логгер запускается из обоих catch во фронт-контроллере. Причем по отношению
        к исключениям класса \App\Extension\DB выдаются предыдущие данные, т.е. свойства объекта класса \PDOException. Как бы в чём смысл выводить
        в логи то, что итак выводится на экране. А вот оригинальное сообщение SQLSTATE[HY000] [1049] Unknown database 'php21' куда ценнее.

В целом по домашке: К сожалению так и не придумал, какие свойства или методы создать в классах исключений. Создал по одному бредовому методу в каждом
классе (чтобы не оставлять его совсем пустым, не эстетично как то) но в коде эти методы не использовал. Но ведь эти классы нам нужны не столько для вызова
их свойств или методов, а для отлавливания исключений, т.е. Exception будет ловить все исключения. Возможно по ходу дальнейшего продвижения по курсу меня осенит,
что можно туда написать.
Ну и наконец-то сделал вёрстку на бутстрапе, чтобы не так вырвиглазно смотрелся сайт.