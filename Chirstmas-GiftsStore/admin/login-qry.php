<?php
session_start();

require_once("./config.php");
require_once "./includes/auth.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"  && $_POST['submit'] == "login") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // verify inputs are correct ?

    if ($email == "" || $password == "") {
        header("Location:login.php");
        exit;
    }

    // verify user is exist ?
    $sel_sql = "SELECT * FROM users WHERE email='$email'";
    $exists = mysqli_query($con, $sel_sql);

    if (mysqli_num_rows($exists) === 0) {
        header("Location:login.php");
        exit;
    }

//     echo "outsidte"; 
// echo $password; 

   
    // if user exists then verify its password is correct ?
    $user = mysqli_fetch_assoc($exists);

    // print_r($user); 

    if ($password == $user['password']) {
        // if everything is okay then start session and redirect inbox
        $_SESSION['login'] = true;
        $_SESSION['user_id']  = $user['id']; 
        //echo "inside"; exit;
        header("location:index.php");
    } else {
        header("Location:login.php");
        exit;
        
    }
}
