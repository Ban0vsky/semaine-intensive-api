<?php

session_start();
echo($_SESSION['user']);

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