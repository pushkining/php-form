<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <!-- <h1>FORM</h1> -->
    <header class="header">
    <nav>
        <ul class='header__menu'>
            <li><a class="header__link" href="/home">Home</a></li>
            <li><a class="header__link" href="/login">Login</a></li>
            <li><a class="header__link" href="/users">Users</a></li>
            <li><a class="header__link" href="/registration">Registration</a></li>
            <li><a class="header__link" href="/contacts">Contacts</a></li>
        </ul>
    </nav>
    <p>
        <?= $routes_str ?>
    </p>
    </header>
    <main class="page">
