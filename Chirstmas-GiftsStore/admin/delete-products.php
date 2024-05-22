<?php

require_once("config.php");

 $id = $_GET['id'];

 $sql = "DELETE FROM categories WHERE id = $id";
 $result = mysqli_query($con , $sql);

 if($result){
    $sql2 = mysqli_query($con ,"DELETE FROM products WHERE category_id = $id");
    session_start();
    $_SESSION['delete_msg']='Delete Successfully..........!';
    

    header("Location:products.php");

 } 


?>

