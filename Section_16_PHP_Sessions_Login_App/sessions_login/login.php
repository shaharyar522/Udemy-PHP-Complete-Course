<?php  

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //Example credentionals
    $username = "admin";
    $password = "secret";
     // Get the input from the user .
    $input_username =  $_POST["username"];
    $input_password = $_POST["password"]; 
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<h2>Login page</h2> 

<form method="POST">
   
   <label for="username">Username</label>
   <input id="username" type="text" name="username"><br><br>
   <label for="password">Password</label>
   <input type="password" id="password" name="password"><br><br>
   <input type="submit" value="Login">

</form>
</body>
</html>