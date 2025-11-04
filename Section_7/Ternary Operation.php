<?php



$is_admin = false;

echo $is_admin ? "Welcome, Admin " : "Access denied ";

echo "<br>";
//2
$is_logged_in = true;
$message = ($is_logged_in) ? "Wellcome Backe " : "Please singup ";
echo $message;

echo "<br>";

//3
$age = 18 ;
$status = ($age >= 20) ? "Adult" : "Minier";

echo $status;

echo "<br>";