<?php


// $title = 'My money handler';



// if(!empty($_POST))
// {

//     $data = [

//         'data1' => trim($_POST['input1']),
//         'data2' => floatval($_POST['input2']),
//     ];

//     $prepare = $pdo->prepare('
//         INSERT INTO
//             expenses (name, amount)
//         VALUES
//             (:data1, :data2)
//     ');
//     $prepare->execute($data);
// }

// $query = $pdo->query('SELECT * FROM expenses');
// $returnedData = $query->fetchAll();
if (isset($_GET['geolocalisation']) or isset($_GET['address']))
{
    include '../views/pages/in_progress.php';
}
else 
{

    include '../views/pages/home.php';
}