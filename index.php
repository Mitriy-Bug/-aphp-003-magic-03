<?php
declare(strict_types=1);
require_once 'autoloader.php';

use class\Person;
use class\PeopleList;

// Создаем объект Person
$person = new Person('Дмитрий', 41, 'mitriy');

// Сериализуем объект
$serialized_person = serialize($person);

// Выводим сериализованный объект
echo "Сериализованный объект:\n" . $serialized_person . "\n\n";

// Меняем значение логина в строке
$new_login = 'ivan12';
if (strlen($new_login) !== strlen($person->login)) {
    die("Длина нового логина должна совпадать с длиной старого логина!");
}
$modified_serialized_person = str_replace($person->login, $new_login, $serialized_person);

// Десериализуем измененный объект
$deserialized_person = unserialize($modified_serialized_person);

// Выводим свойства десериализованного объекта
echo "Десериализованный объект:\n";
echo $deserialized_person . "\n\n";  // Используем метод __toString()


// Создаем несколько объектов Person
$person1 = new Person('Иван', 30, 'ivan');
$person2 = new Person('Пётр', 40, 'petro');
$person3 = new Person('Мария', 20, 'mariya');

// Создаем экземпляр списка людей
$people_list = new PeopleList();

// Добавляем людей в список
$people_list->add($person1);
$people_list->add($person2);
$people_list->add($person3);

// Проходим по списку с использованием foreach
echo 'Список людей:' . "\n";
foreach ($people_list as $key => $person) {
    echo "Сотрудник №{$key}: " . $person . "\n";  // Используем метод __toString()
}











