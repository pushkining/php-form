<?php

function getUser($email) {
    $DB = mysqli_connect("127.0.0.1", "root", "root", "website");


    if (!$DB) {
        die("Ошибка: Невозможно установить соединение");
    }


    $dataUser = $DB->query("SELECT id, username, email, phone from users where email='{$email}'");


    $user = $dataUser->fetch(MYSQLI_ASSOC);

    // var_dump($users);

    mysqli_close($DB);
    
    return $user;
}

function addUser($data) {
    $DB = mysqli_connect("127.0.0.1", "root", "root", "website");


    if (!$DB) {
        die("Ошибка: Невозможно установить соединение");
    }
    
    
    $sql = "INSERT INTO users (username, email, `password`, phone, age) ";    
    $sql .= "VALUES('{$data['name']}', '{$data['email']}', '{$data['password']}', '{$data['phone']}', '{$data['age']}')";

    $resultQuery = $DB->query($sql);

    mysqli_close($DB);
    
    return $resultQuery;
}

//$user = [
//    "username" => 'vasa-1',
//    "email" => 'vasa-1@gmail.com',
//    "password" => '555555555',
//    "phone" => '+38073555222',
//    "age" => 25,
//];

// addUser($user);
