<?php

// db connection

require_once "./config.php";
require_once "./includes/helpers.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // echo "<pre>"; print_r($_POST); echo "</pre>";
    // echo "<pre>"; print_r($_FILES); echo "</pre>";

    // upload image
    $data = uploadImage("users", $_FILES['image'], 3, "add-users.php");

    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];

        // echo $name;
        // exit;

        $query = "INSERT INTO `users`( `name`, `email`, `password`, `role`, `mobile`, `address`,`description`, `image`)
            VALUES ('$_POST[name]','$_POST[email]' ,'$_POST[password]','$_POST[mobile]','$_POST[address]','$_POST[description]','$_POST[image]') ";

        if (mysqli_query($con, $query)) {
            header("Location:add-users.php");
        } else {
            echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
        }
    } else {

        echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";
    }

    exit;
}