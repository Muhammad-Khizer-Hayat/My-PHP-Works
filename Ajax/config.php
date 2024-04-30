<?php

// database connection
$con = mysqli_connect("localhost", "root", "", "ajax_crud");
if (!$con) {
    die("database not connected");
}