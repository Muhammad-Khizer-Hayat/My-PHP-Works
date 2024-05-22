<?php
//Database Connection
require_once "./includes/helpers.php";
require_once "config.php";




if($_SERVER['REQUEST_METHOD']==="POST" && $_POST['submit']==="signup") {

    $name = ($_POST['name']);
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = password_hash( $_POST['password'],PASSWORD_DEFAULT);
    $address = $_POST['address'];
    

    //veryfying username is unique
    $select_q="SELECT *FROM customers WHERE email='$email' ";
    $result=mysqli_query($con,$select_q);
    if(mysqli_num_rows($result)===1){
      die("$email is already registered");
    }

    $sql = "INSERT INTO customers (`name`,`mobile`, `email`, `password`, `address`)
     VALUES('$name', '$mobile','$email', '$password','$address')";

    $result = mysqli_query($con, $sql);
    if($result){
      $_SESSION['success'] = "Registration successfully...!";
          header("Location:register.php");

        //  header("Location:./index.php");
    }
    else{
      $_SESSION['error'] = "Registration has not been complete...!";
    }
 }


?>