<?php

$conn = mysqli_connect("localhost", "root", "", "prepare_stmt_db");

$sql = "INSERT INTO users(username, email, password, reg_date) VALUES(?,?,?,?)";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    $username = "shari";
    $email = "shariZ@gamil.com";
    $password = "";
    $reg_date = date('Y-m-d');

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email,  $password, $reg_date);

    mysqli_stmt_execute($stmt);

    echo "New User  Create Successfuly";

    mysqli_stmt_close($stmt); 
} else {
    echo "Error" . mysqli_error($conn);
}
