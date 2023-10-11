<?php 
ini_set('display_errors', 1);  
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include 'MySqlLibrary.php';
    $getProducts = new Mysql();
    $getProducts->dbConnect();
    $query = $getProducts->selectAll('products');
    $array = [];
    while($row= mysqli_fetch_array($query)) 
    {
        array_push($array, $row);
    }
    echo json_encode($array); die;
?>
