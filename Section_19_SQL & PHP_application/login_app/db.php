<?php

$conn = mysqli_connect("Localhost", "root", "", "login_app");
if ($conn) {
   // echo "Connected";
} else {
    echo "not connected " . mysqli_error($con);
}

function check_query($conn, $result){
  if(!$result){
     return "Error" . mysqli_errno($conn);
  }
  return true;
}
