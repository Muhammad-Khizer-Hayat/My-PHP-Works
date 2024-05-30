<?php
//Database Connection
require_once "config.php";


if(isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES('$name','$email', '$message')";

    $result = mysqli_query($con, $sql);
    if($result){
        header("Location:contact.php"); 
    }
          
 }


?>