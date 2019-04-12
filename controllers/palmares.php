<?php

// Palmares
$query = $db->prepare("SELECT * FROM events WHERE username = :username ORDER BY score DESC");
    
$query->execute(
    [
    "username" => $_SESSION['user'],
    ]
);
$dataPalma = $query->fetchAll();
