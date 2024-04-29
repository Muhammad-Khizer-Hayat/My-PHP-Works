<?php
require_once "./helpers.php";

$con = mysqli_connect("localhost", "root", "", "grocery_store") or die("Db not Connected");
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['submit'] == "login") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // verify inputs are correct ?

    if ($email == "" || $password == "") {
        $_SESSION['error'] = "All feilds are requireds...!";
        header("Location:login.php");
        exit;
    }
    // verify user is exist ?
    $sel_sql = "SELECT * FROM customer WHERE email='$email' ";
    $exists = mysqli_query($con, $sel_sql);

    if (mysqli_num_rows($exists) === 0) {
        $_SESSION['Invalid'] = "Invalid Creditional......!";
        header("Location:login.php");
        exit;
    }

    // if user exists then verify its password is correct ?
    $user = mysqli_fetch_assoc($exists);

    if (password_verify($password, $user['password']) === false) {
        $_SESSION['Invalid'] = "Invalid Creditional......!";
        header("Location:login.php");
        exit;
    }


    // if everything is okay then start session and redirect inbox
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user_id']  = $user['id'];
    header("location:index.php");
}
