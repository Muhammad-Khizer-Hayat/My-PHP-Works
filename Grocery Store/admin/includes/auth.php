<?php




require_once("./config.php");
require_once "./includes/helpers.php";


if(!isset($_SESSION['login']) || $_SESSION['login'] == false ){
    header("Location:login.php");
}

else {

    $sel_qry = "SELECT * FROM users WHERE id = '$_SESSION[user_id]'";
    $result = mysqli_query($con, $sel_qry);
    
    $row  = mysqli_fetch_assoc($result);
    
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['mobile'] = $row['mobile'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['description'] = $row['description'];
    $_SESSION['image'] = $row['image'];
}




?>