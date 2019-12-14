<?php

if($method === 'GET'){

    var_dump($_SESSION);
    if (empty($_SESSION['routes'])) {
        $_SESSION['routes'][] = [];
    }
    

    if(empty($_SESSION['routes'][$route])) {
        $_SESSION['routes'][$route] = 1;
    }else{
        $_SESSION['routes'][$route]++;
    }

    $routes_str = '';
    foreach($_SESSION as $k => $v) {
        $routes_str .= "{$k} = {$v}. ";
    }


    include './views/header.php';

    if($route === '/home'){
        include './views/home.php';
    }
    if($route === '/registration'){
        include './views/registration.php';
    } 

    if($route === '/users'){
        $users = getUser();
        //var_dump($users);
        include './views/users.php';
    } 
    if($route === '/login'){
        include './views/login.php';
    } 
    if($route === '/contacts'){
        include './views/contacts.php';
    }

    include './views/footer.php';
}

// var_dump($_POST);
