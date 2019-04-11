<?php

// Delete a relation with a friend or a friend request
if (isset($_POST['delete']))
{
    $query = $db->prepare("DELETE FROM friends WHERE id=:id");
    $query->execute(
        [
        "id" => $_POST['id'],
        ]
    );
}

// Add a friend
if ($_GET['action'] == "add") 
{
    $query= $db->prepare("INSERT INTO friends(username_1, username_2, is_pending) VALUES (:username_1, :username_2, :is_pending)");
    $query->execute
    ([
        "username_1" =>  $_GET['usernamefrom'],
        "username_2" =>  $_GET['usernameto'],
        "is_pending" => 1,
    ]);

}

// Accept a friend request
if (isset($_POST['accept'])) 
{
    $query = $db->prepare("UPDATE friends SET is_pending = 0 WHERE id =:id");
    $query->execute(
        [
        "id" => $_POST['id'],
        ]
    );
}
?>