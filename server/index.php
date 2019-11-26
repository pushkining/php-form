<?php

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
// var_dump($method);

if($method === 'GET'){
include './views/header.php';

if($route === '/home'){
include './views/home.php';
}
if($route === '/login'){
    include './views/login.php';
} 

if($route === '/contacts'){
    include './views/contacts.php';
}

include './views/footer.php';
}

if($method === 'POST') {
    
   if($route === '/login') {
    $request = json_decode(file_get_contents('php://input'),true);
    valid($request);
    echo 'hello';
 }
}

function valid($data) {
    $errors = [];

    if (!preg_match('/^[а-яa-z0-9\-_\.]{2,25}$/i', $data['name'])) {
        $errors['name'] = 'name is not valid';
    }
    if (!preg_match('/^[0-9a-z._\-]{1,20}@[0-9a-z_\-]{1,14}\.[a-z]{2,10}$/i', $data['email'])) {
        $errors['email'] = 'email is not valid';
    }
    if (!preg_match('/^(\+380|380|08|0)[0-9]{9,}$/', $data['phone'])) {
        $errors['phone'] = 'phone is not valid';
    }
    if (!preg_match('/^[а-яa-z0-9\-_\.]{2,25}$/i', $data['password'])) {
        $errors['password'] = 'password is not valid';
    }
    if (!(gettype($data['subcribe']) === 'boolean')){
        //$type = gettype($data['subcribe']);
        $errors['subscribe'] = 'subscribe is not valid';
    }
    if ($errors) {
        return $errors;
    }
    return true;
    
}