<?php

include("config.php");

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];

$qry = "INSERT INTO `users`(`fname`, `lname`) 
VALUES ('$fname','$lname')";

if (mysqli_query($con, $qry)) {
    echo "Data inserted successfully....!";
} else {
    echo "Data is not inserted ....!";
}