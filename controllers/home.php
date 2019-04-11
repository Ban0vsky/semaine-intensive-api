<?php


if (isset($_GET['geolocalisation']) or isset($_GET['address']))
{
    include '../views/pages/in_progress.php';
}
else 
{

    include '../views/pages/login.php';
}