<?php

require_once("./config.php");
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // get data from form...
    // $products = $_POST['products'];
    $produts_id = $_POST['id'];


    // check if image is update or not
    if (empty($_FILES['new_image']['name'])) {
        $name = $_POST['old_image'];
    } else {
        $data = uploadImage("categories", $_FILES['new_image'], 3, "categories");

        if ($data['errors'] === false) {
            $name = $data['result'];
        }
    }

    // update qry run here....

    $query = "UPDATE `products` SET `name`='$name',`image`='$name',`unit_price`='$unit_price' WHERE `id`='$products_id'";

    if (mysqli_query($con, $query)) {

        $_SESSION['success'] = "Category has been added successfully...!";
        header("Location:categories.php");
    } else {
        $_SESSION['error'] = "Category has not been updated...!";
        header("Location:categories.php");
    }
}


//exit;