<?php 

$query = $db->prepare('SELECT * FROM users WHERE username=:username');

$query->execute(
    [
    "username" => $_SESSION['user'],
    ]
);

$profil_data = $query->fetch();

$query = $db->prepare("SELECT COUNT(*) as rang FROM users WHERE score >= (SELECT score  FROM users WHERE username =:username ORDER BY score)"); 
$query->execute(
    [
    "username" => $_SESSION['user'],
    ]
);

$user_score_result= $query->fetch();

?>