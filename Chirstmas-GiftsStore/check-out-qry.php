<?php
//Database Connection
require_once "config.php";


if($_SERVER['REQUEST_METHOD']==="POST" && $_POST['submit']==="submit") {
 
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    


    $sql = "INSERT INTO `bills_information`( `name`, `email`, `number`, `address`) VALUES ('$name','$email', '$number', '$address')";

    $result = mysqli_query($con, $sql);
    if($result){
        header("Location:checkout.php"); 
    }
          
 }


?>