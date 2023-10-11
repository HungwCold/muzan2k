<?php 
ini_set('display_errors', 1);  
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include 'MySqlLibrary.php';
    
    $getProducts = new Mysql();
    $getProducts->dbConnect();
    $query = $getProducts->selectAll('products');

    while($row= mysqli_fetch_array($query)) {
       echo $pid=$row["id"];
       echo '<pre>';
       echo $pid=$row["name"];
       echo '<pre>';
       echo $pid=$row["catalog"];
    }


    


?>

