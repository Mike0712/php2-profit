Задание 1. В классе App\Dd был создан новый метод queryEach. Его отличие от query в том, что для выполнения запроса к
базе данных мы вызваем метод PDOStatement::fetch() а не fetchAll(). То есть получаем не массив данных, а получаем мы
не все строки базы данных (в виде объектов, так как у нас было задано условие получать массив объектов) в массиве, а одну
строку(объект). Дополнительно нам потребовалось вызвать метод setFetchMode чтобы передать ему параметры, что мы по
прежнему хотим видеть строку таблицы базы данных в виде объекта.
Далее генерируем построчный вывод объектов новостей и получаем такой же результат (foreach в методе App\View::Render
c 'удовольствием' обрабатывает наш генератор, как будто это массив);
Проверка была сделана в контроллере App\Controllers\Index::actionTest. В модели был создан метод findByGen() который
полностью повторяет метод findAll() за исключением того, что он вызывает метод класса Db не query(), а queryEach().
Остальные контроллеры продолжают работать с прежними моделями, т.к. есть определенные трудности с использованием генератора
повсеместно, т.к. например Twig выдаёт критическую ошибку, когда к нему в шаблон приходит генератор вместо массива.
После выполнения третьей части домашки стало невозможно использовать генератор в админ-панели.

Но поскольку по условиям задачи не стояло заменить Db queryEach() вместо query(), а лишь проверить его работу, то он
используется лишь как экспериментальный в контроллере App\Controllers\Index::actionTest.

Задание 2. Был создан класс App\Admin\DataTable, он получает на ход (в конструктор) массив моделей и массив функций.
Массив моделей мы получили путём вызова в контроллере метода нужной нам модели findAll(). Массив анонимных функций мы
создаём на месте (в контроллере).

Метод render возвращает массив массивов. А именно массив строк(row). В каждом массиве лежат ячейки соответствующие
одной строке. Количество ячеек в одном массиве соответствует количеству анонимных функций (столбцов).
Каждая ячейка - строка имеет название, которое лежит в ключе. Приходит это название из контроллера, где мы присваиваем
элементам массива (содержащим) функции,ключи. Соотвественно эти ключи приходят в названия ячеек.
Содержимое ячеек можно создавать абсолютно произвольно, при создании функций контроллера. Так например в поле
Автор мы кладём и значение из таблицы БД author_id и значение автора из таблицы authors, и разбавляем эти значения
подстановкой строк
'-' ,'id'  и прочее.

Задание 3. Реализация в шаблоне. Реализация очень простая. Создаём скелет кода html таблицы, а дальше уже дело техники.
Единственный минус, целых три раза вызывать foreach один раз для строки с названиями ячеек. И два раза для генерации строк
в теле таблицы.