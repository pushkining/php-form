<?php

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



