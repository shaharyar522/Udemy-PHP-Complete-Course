<?php  
session_start(); 

if(!isset($_SESSION["login"]) && $_SESSION["login"] == true){
    header("Location: login.php");
    exit();
}




?>
<?php  

// echo "<pre>";

// print_r($_SESSION);

// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wellcome Admin</h1>

     
    <a href="logout.php">Logout</a>
</body>
</html>