<?php

$host = "localhost";
$username = "root";
$password = "";
$database_name = "login_app";

$conn = mysqli_connect($host, $username, $password, $database_name);
if (!$conn) {
   die("Connection failed " . mysqli_connect_error());
} else {
   return "Connected Succesfully";
}

function check_query($conn, $result)
{

   if (!$result) {
      return "Error" . mysqli_errno($conn);
   }
   return true;
}





// now this is my anohter function in update_user
function update_user($conn,$user_id, $new_username, $new_email)
{
   $sql = "UPDATE users SET username = '$new_username', email = '$new_email' WHERE id = '$user_id'";
   return mysqli_query($conn, $sql);

}
