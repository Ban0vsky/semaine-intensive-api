<?php

    $query = $db->query('SELECT * FROM users ORDER BY score DESC LIMIT 5');

    $score_data = $query->fetchAll();

?>