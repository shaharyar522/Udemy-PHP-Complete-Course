<?php

$conn = mysqli_connect("Localhost", "root", "", "login_app");
if ($conn) {
   // echo "Connected";
} else {
    echo "not connected " . mysqli_error($con);
}
