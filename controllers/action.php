<?php
require 'database.php';
session_start();


// Delete a relation with a friend or a friend request
if ($_GET['action'] == "delete") 
{
    $db->query("DELETE FROM friends WHERE id=".$_GET['id']);
    header("Location:friends.php");
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
    header("Location:friends.php");
}

// Accept a friend request
if ($_GET['action'] == "accept") 
{
    $db->query("UPDATE friends SET is_pending = 0 WHERE id = ".$_GET['id']); 
    header("Location:friends.php");
}


?>