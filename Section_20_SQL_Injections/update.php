<?php

$conn = mysqli_connect("localhost", "root", "", "prepare_stmt_db");

// Prepare the query
$stmt = mysqli_prepare($conn, "UPDATE users SET username = ?  WHERE id = ?");
if ($stmt) {
    $user_id = 11;
    $username = "Shari kahn - Update ";


    mysqli_stmt_bind_param($stmt, "si", $username, $user_id);

    mysqli_stmt_execute($stmt);

    echo "Update  Successfuly";

    mysqli_stmt_close($stmt);
} else {
    echo "Error" . mysqli_error($conn);
}
