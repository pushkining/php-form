 <?php

function getUsers() {
   

$DB = mysqli_connect("127.0.0.1", "root", "root", "website");

if (!$DB) {
    die("Ошибка: Невозможно установить соединение");
}

$dataUsers = $DB->query('SELECT * from users');

$users = $dataUsers->fetch_all(MYSQLI_ASSOC);
var_dump($users);

mysqli_close($DB);
//return $users;
}

function addUser($data) {
    $DB = mysqli_connect("127.0.0.1", "root", "root", "website");
      
    if (!$DB) {
        die("Ошибка: Невозможно установить соединение");
    }

    $sql = "INSERT into users (user_name,user_email,`user_password`,user_phone,age)";
    $sql .= "VALUES('{$data['user_name']}', '{$data['user_email']}', '{$data['user_password']}','{$data['user_phone']}','{$data['age']}');";    
    $resultQuery = $DB->query($sql);
    
    //$users = $resultQuery->fetch_all(MYSQLI_ASSOC);
    var_dump($resultQuery);

    mysqli_close($DB);
    return $resultQuery;
    }

$user = [
    "user_name" => "vana",
    "user_email" => "vana@gnauk.com",
    "user_phone" => 380391234564,
    "user_password" => 4567,
    "age" => 14,

];

    addUser($user);