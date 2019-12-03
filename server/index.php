<?php
include './handlers/validate.php';
include './handlers/mysqliConnect.php';


$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
// var_dump($method);
include './handlers/routesMethodGet.php';
include './handlers/routesMethodPost.php';



