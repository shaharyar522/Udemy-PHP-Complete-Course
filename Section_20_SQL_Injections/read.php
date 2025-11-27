<?php
include('db.php');

// Prepare the query
$stmt = mysqli_prepare($conn, "SELECT id, username FROM users WHERE id = ?");

if ($stmt) {

    // Input parameter for WHERE id = ?
    $user_id = 1;

    // Bind input parameter
    mysqli_stmt_bind_param($stmt, "i", $user_id);

    // Execute query
    mysqli_stmt_execute($stmt);

    // Bind output result variables
    mysqli_stmt_bind_result($stmt, $id, $username);

    // Fetch result
    if (mysqli_stmt_fetch($stmt)) {
        echo "The ID: $id <br>";
        echo "Username: $username";
    } else {
        echo "No record found!";
    }
}
?>
