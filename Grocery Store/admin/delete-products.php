<?php

require_once("config.php");

 $id = $_GET['id'];

 $sql = "DELETE FROM category WHERE id = $id";
 $result = mysqli_query($con , $sql);

 if($result){
    $sql2 = mysqli_query($con ,"DELETE FROM products WHERE category_id = $id");
    

    header("Location:products.php");

 }


?>

