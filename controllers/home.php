<?php

session_start();
if (isset($_SESSION['user'])) {
    $_SESSION['success'] = "You are now logged in";
    echo ($_SESSION['success']." as ".$_SESSION['user']);
}

if ((isset($_GET['geolocalisation']) or isset($_GET['address'])) and (isset($_SESSION['user'])))
{
    include '../views/pages/in_progress.php';
}
elseif (isset($_SESSION['user']))
{
    include '../views/pages/home.php';
}
else 
{

    include '../views/pages/login.php';
}