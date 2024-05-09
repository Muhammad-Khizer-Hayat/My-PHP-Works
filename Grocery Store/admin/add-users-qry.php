<?php

// db connection

require_once "./config.php";
require_once "./includes/helpers.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // echo "<pre>"; print_r($_POST); echo "</pre>";
    // echo "<pre>"; print_r($_FILES); echo "</pre>";

    // upload image
    $data = uploadImage("users", $_FILES['image'], 3, "view-users");

    if ($data['errors'] === false) {
        // save info into db
        $name = $data['result'];

       

        $insert_query = "INSERT INTO users ( `name`, `email`, `password`, `mobile`, `address`,`description`, `image`)
            VALUES ('$_POST[name]','$_POST[email]' ,'$_POST[password]','$_POST[mobile]','$_POST[address]','$_POST[description]','$name') ";
//  echo $insert_query;
//  exit;
        if (mysqli_query($con, $insert_query)) {
            header("Location:add-users.php");
        } else {
            echo "<div class='alert alert-danger mt-2 uploadingErr'>Query Failed</div>";
        }
    } else {

        echo  "<div class='alert alert-danger mt-2 uploadingErr'> $data[result]</div>";
    }

    exit;
}