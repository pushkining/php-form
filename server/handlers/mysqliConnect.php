<?php

$link = mysqli_connect("127.0.0.1", "root", "root", "website");

if (!$link) {
//    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
//    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
//    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
//    exit;
    die("Ошибка: Невозможно установить соединение");
}

//echo "Соединение с MySQL установлено!" . PHP_EOL;
//echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

$users = $link->query('SELECT * from users where id_user=3');

var_dump($users);

mysqli_close($link);
?>
