<?php
// Запуск сессии
session_start();

// Вывод имени и идентификатора сессии
echo "Имя пользователя: " . $_SESSION['user_name'] . "<br>";
echo "Идентификатор сессии: " . session_id();

// Данные для записи в файл
$data = "ФИО: Титок Илья Валерьевич\nEmail: example@example.com\nНомер телефона: +123456789";

// Путь к файлу
$file = '1.txt';

// Запись данных в файл
file_put_contents($file, $data);

// Считывание первых двух строк из файла
$lines = file($file, FILE_IGNORE_NEW_LINES);

// Вывод первых двух строк на экран
echo "<br>Первая строка: " . $lines[0] . "<br>";
echo "Вторая строка: " . $lines[1];
?>