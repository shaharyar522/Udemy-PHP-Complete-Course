<?php
session_start();


$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Example credentionals
    $username = "shari";
    $password = "12345";
    // Get the input from the user .
    $input_username =  $_POST["username"];
    $input_password = $_POST["password"];


    if($input_username === $username && $input_password == $password) {

        $_SESSION['loggedin'] = true;
        $_SESSION["username"] = $input_username;
        //set the haeder
        header("location: admin.php");
        exit;
        
    } else {

        $message = "Invalid username and password";

    }
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

    <?php if ($message) : ?>
            <p style="color: red;"><?php echo $message ?></p>
    <?php endif; ?>


    <form method="POST">

        <label for="username">Username</label>
        <input id="username" type="text" name="username"><br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">

    </form>
</body>

</html>