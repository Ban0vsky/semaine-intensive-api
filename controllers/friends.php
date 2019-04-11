<?php

$query = $db->prepare('SELECT * FROM friends WHERE username_1 = :username_1 OR username_2 = :username_2 ');

$query->execute(
    [
    "username_1" => $_SESSION['user'],
    "username_2" => $_SESSION['user'],
    ]
);

$friends_data = $query->fetchAll();

if ($_SESSION['user'])
{
    $user_check[] = $_SESSION['user'];
}


?>