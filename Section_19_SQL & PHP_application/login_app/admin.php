<?php   
session_start();

if(!isset($_SESSION["log_in"]) && isset($_POST["log_in"]) !== true){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>admin</h1>
    <h3>well come admin</h3>
</body>
</html>