<?php

include '../database/database.php';

/**
 * Routing
 */

define ('URL','http://localhost/TEST_S2_H2-master/public/');


$q = !empty($_GET['q']) ? $_GET['q'] : 'home';

if($q == 'home')
{
    $controller = 'home';
}
 

include '../controllers/'.$controller.'.php';
