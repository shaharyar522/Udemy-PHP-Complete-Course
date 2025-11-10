<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {


    $user_name = htmlspecialchars(trim($_POST["name"]));
    $user_password = htmlspecialchars(trim($_POST["password"]));

    if($user_name === "shari" && $user_password === "12345"){
         
            $_SESSION["login"] = true;
            $_SESSION["name"] = $user_name;

            header("Location: admin.php");
            exit();
            

    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form_style.css">
    <title>Practice Login</title>
</head>

<body>

    <h1 style="text-align: center; justify-content:center;">Practice Login</h1>

    <form method="POST">
        <label for="name">Name:</label>
        <input id="name" type="text" name="name">
        <label for="pws">Password</label>
        <input id="pws" type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>

</html>