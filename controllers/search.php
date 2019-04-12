<?php

// User search
if (isset($_POST['search'])) 
{
    $prepare = $db->prepare('
        SELECT *
        FROM users
        WHERE username=:username
    ');

    $prepare->bindValue('username', $_POST['username']);

    $prepare->execute();
    $search_result = $prepare->fetch();
}

?>