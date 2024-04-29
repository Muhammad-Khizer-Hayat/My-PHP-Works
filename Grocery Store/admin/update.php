<?php
//Database connection
include("./config.php");


// if($_POST['submit']) {

if (!isset($_POST['name']) || empty($_POST['name'])) {
    die("Name filed is required");
}

$id = $_POST['id'];
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$unit_price = $_POST['unit_price'];
$category_id = $_POST['category_id'];
$quantity = $_POST['quantity'];
$image = $_POST['image'];
$status = $_POST['status'];
$description = $_POST['description'];



$sql = "UPDATE products SET name ='$name',  unit_price='$unit_price', category_id='$category_id',quantity='$quantity'description='$description',image='$image' WHERE id=$id";
$result = mysqli_query($con, $sql);
if ($result) {

    header("Location: products.php");
}
