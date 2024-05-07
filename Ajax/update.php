<?php
require_once "./config.php";

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];

    $sql = "UPDATE users SET `fname`='$fname' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "successfully updated";
    } else {
        echo "something went wrong";
    }
}
