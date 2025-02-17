<?php
// Регистрация автозагрузчика
spl_autoload_register(function ($class_name) {
    // Заменяем обратные слеши (\) на прямые (/)
    $file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';

    // Проверяем существование файла и подключаем его
    if (file_exists($file)) {
        require_once $file;
    }
});